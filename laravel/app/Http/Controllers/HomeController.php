<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Investimento;

class HomeController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function cliente()
    {
        $data = Cliente::all();
        return view('cliente')->with('cliente', $data);
        //return view(["clientes"=>$data]);
    }
  

    public function administrador()
    {
        $data = [
            'investimento' => Investimento::all(),
        ];

        return view("administrador",$data);
    }

}