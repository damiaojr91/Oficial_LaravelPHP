@extends('layout.app')

@section('content')
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-6 p-lg-3 mx-auto my-5">
        <h1 class="display-5 fw-normal">Bem vindo ADMINISTRADOR</h1>
        <p class="lead fw-normal">Mussum Ipsum, cacilds vidis litro abertis. Casamentiss faiz malandris se pirulitá. Admodum accumsan disputationi eu sit. </p>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <main class="container mt-5">
        <div class="row">
            <div class="offset-3 col-6">
                <form action="{{route('administrador.create')}}" method="POST">
                    @csrf
                    <div class="d-flex justify-content-end">
                        <div class="row">
                            <div class="col-12 my-3">
                                <h3>Adicionar cliente</h3>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="cliente" class="form-label">Cliente:</label>
                                    <input type="text" class="form-control" id="nome" name="nome">
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">E-mail:</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="investimento" class="form-label">Investimento:</label>
                                    <input type="text" class="form-control" id="investimento" name="investimento">
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-success">Salvar</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-12 pt-5">
                <hr />
            </div>
            <div class="offset-3 col-6 starter-template py-5 px-3">
                <h3 class="text-center"> Lista de Clientes </h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Cliente</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Investimento</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($investimentos as $investimento)
                            <tr>
                                <th scope="row">{{$investimento->nome}}</th>
                                <td>{{$investimento->email}}</td>
                                <td>{{$investimento->investimento}}</td>
                                <td class="">
                                    <div class="btn-group " role='group'>
                                        <a class="btn btn-info btn-sm" href="{{route('administrador.edit',$produto->id)}}">Alterar</a>
                                        <a class="btn btn-danger btn-sm" href="{{route('administrador.delete',$produto->id)}}">Deletar</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </main><!-- /.container -->
@endsection