@extends('layout.app')

@section('content')

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-6 p-lg-3 mx-auto my-5">
        <h1 class="display-5 fw-normal">Clientes XasTree Financial</h1>
        <p class="lead fw-normal">Abaixo você pode conferir a lista de clientes e seus investimentos.</p>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <main class="container mt-5">
        <div class="row">
            <div class="offset-3 col-6 starter-template py-5 px-3">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Investimento</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($cliente as $data)
                            <tr>
                            <th scope="row">{{$data->nome}}</th>
                                <td>{{$data->sobrenome}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->investimento}}</td>
                            
                        @endforeach</tr>
                    </tbody>

                    <!--<tbody>
                        @foreach ($cliente as $clientes)
                            <tr>
                                <td scope="row">{{$clientes->nome}}</td>
                                <td>{{$clientes->email}}</td>
                                <td>{{$clientes->investimento}}</td>
                            </tr>
                        @endforeach
                    </tbody>-->

                </table>
            </div>
        </div>

    </main><!-- /.container -->

    @endsection