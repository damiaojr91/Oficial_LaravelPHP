@extends('layout.app')

@section('content')

<div class="starter-template text-center py-5 px-3">
    <h1>Confira a listagem XasTree Financial</h1>
    <p class="lead">Abaixo você pode conferir a lista de clientes e seus investimentos</p>
  </div>

  <main class="container mt-5">
        <div class="row">
            <div class="offset-3 col-6 starter-template py-5 px-3">
                <h3 class="text-center"> Lista de Clientes x Investimento </h3>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Investimento</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($investimentos as $investimento)
                            <tr>
                                <th scope="row">{{$investimento->nome}}</th>
                                <td>{{$investimento->email}}</td>
                                <td>{{$investimento->investimento}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </main><!-- /.container -->

    @endsection