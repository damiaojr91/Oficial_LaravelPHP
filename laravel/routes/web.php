<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use GuzzleHttp\Client;

$url = "https://reqres.in/api/users";
$varclient = json_decode(file_get_contents($url));


//Define as rotas de utilização
Route::get('/', [HomeController::class, 'index'])->name('index');
//Route::get('/cliente', [HomeController::class, 'cliente'])->name('cliente.index');
//Route::get('/administrador', [HomeController::class, 'administrador'])->name('administrador.index');
Route::post('/administrador/investimento/criar', [HomeController::class, 'create'])->name('administrador.create');
Route::put('/administrador/investimento/update/{id}', [HomeController::class, 'update'])->name('administrador.update');
Route::get('/administrador/investimento/edit/{id}', [HomeController::class, 'edit'])->name('administrador.edit');
Route::get('/administrador/investimento/deletar/{id}', [HomeController::class, 'delete'])->name('administrador.delete');
Route::delete('/administrador/investimento/destroy/{id}', [HomeController::class, 'destroy'])->name('administrador.destroy');


//Configuração do Guzzle para consumir API


Route::get('/cliente', [HomeController::class, 'cliente'], function(){
$client = new Cliente([
    // Base URI is used with relative requests
    'base_uri' => 'https://reqres.in/api/users.json',
    // You can set any number of default request options.
    'timeout'  => 2.0,
]);

$response = $client->request('GET', 'users');

return ($response->getBody()->getContents());
})->name('cliente.index');

Route::get('/administrador', [HomeController::class, 'administrador'], function(){
    $invest = new Investimento([
        // Base URI is used with relative requests
        'base_uri' => 'https://reqres.in/api/users.json',
        // You can set any number of default request options.
        'timeout'  => 2.0,
    ]);
    
    $response = $invest->request('GET', 'users');
    
    return ($response->getBody()->getContents());
    })->name('administrador.index');
