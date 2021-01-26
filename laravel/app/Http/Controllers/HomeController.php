<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Investimento;
use GuzzleHttp\Client; //define que utilizará a classe Client do guzzle


class HomeController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function cliente()
    {
        $data = Cliente::all(); //puxa o objeto inteiro do investimento, o nome, não o ID
        return view('cliente')->with('data', $data); //puxa os dados da array contido na variável data

    }

    //Definimos utilização da API

    public function administraCliente() //obtem clientes da api
    {
        //define de onde o guzzle puxará a api
        $client = new Client(['verify' => false]); //usa do guzzle e não verifica o SSL da api
        $res = $client->request('GET', 'https://reqres.in/api/users?page=1&per_page=145'); //&per... define quantos itens por paginas que deverá ler

        $retorno = json_decode($res->getBody())->data; //decodifica o json
        foreach ($retorno as $value) {  //inicia o laço
            if (Cliente::where('email', '=', $value->email)->count() > 0) { //impede que haja duplicações caso já exista aquele determinado email cadastrado
                continue;
            }
            $cliente = new Cliente();
            $cliente->nome = $value->first_name; //traz o atributo da váriavel para dentro da value
            $cliente->sobrenome = $value->last_name; //traz o atributo da váriavel para dentro da value
            $cliente->email = $value->email; //traz o atributo da váriavel para dentro da value
            $cliente->investimento_id = 0; //define o campo "novo" investimento_id como inicial 0, sem valor
            $cliente->save(); //salva o item no banco
        }

        $clientes = Cliente::all();
        $investimentos = Investimento::all();
        $data = [         //aponta os dois dados: cliente, investimento para uma unica variavel
            'clientes' => $clientes,
            'investimentos' => $investimentos
        ];

        return view('administrador')->with('data', $data); //puxa os dados da array contido na variável data

    }


    public function defineInvestimento(Request $request)
    {
        $cliente = Cliente::find($request->id); //busca o cliente pelo ID definido na blade administrador
        $cliente->investimento_id = $request->investimento_id; //define um ID investimento para o cliente que também está na blade administrador
        $cliente->save(); //salva o item no banco

        return redirect()->route('administraCliente');
    }
}
