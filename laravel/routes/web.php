<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use GuzzleHttp\Client;

//$url = "https://reqres.in/api/users";
/*$url = new GuzzleHttp\Client(['base_uri' => 'https://reqres.in/api/users']),
$res = $url->request('GET', 'https://reqres.in/api/users'),
echo $res->getStatusCode(),*/
//$varclient = json_decode(file_get_contents($url));


//Define as rotas de utilização para cada página ou função específica (como adicionar )
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/cliente', [HomeController::class, 'cliente'])->name('cliente.index');
Route::get('/administrador', [HomeController::class, 'administraCliente'])->name('administraCliente');
Route::post('/administrador/{id}', [HomeController::class, 'defineInvestimento'])->name('defineInvestimento');


