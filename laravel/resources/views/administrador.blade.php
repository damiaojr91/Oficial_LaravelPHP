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
        <div class="col-12 pt-5">
            <hr />
        </div>
        <div class="offset-3 col-6 starter-template py-5 px-3">
            <h3 class="text-center"> Lista de Clientes </h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Investimento</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($data['clientes'] as $teste)
                    <tr>
                        <form action="{{url('administrador/'.$teste->id)}}" method="POST">
                        <!-- @csrf é uma proteção do Laravel contra injeções indevidas de dados em um formulário -->
                            @csrf
                            <td>{{$teste->nome}}</td>
                            <td>{{$teste->sobrenome}}</td>
                            <td>{{$teste->email}}</td>
                            <td>
                                <!-- Definindo combo box e define que deve ser exibido o valor padrão inicial "Selecione uma opção"-->
                                <!-- Define um id oculto para o cliente -->
                                <input name="id" type="hidden" value="{{$teste->id}}">
                                <select name="investimento_id" class='form-control'>
                                    <option value="0" selected> Selecione uma opção </option>
                                    @foreach ($data['investimentos'] as $investimento)

                                    <!-- Define as opções a serem exibidas na combo box puxando os dados do banco -->
                                    <option value="{{ $investimento->id }}" {{$teste->investimento_id == $investimento->id ? 'selected' : ''}}>{{ $investimento->nome }}</option>

                                    @endforeach

                                </select>

                            </td>

                            <td class="">
                                <div class="btn-group " role='group'>
                                    <button class="btn btn-info btn-sm">Alterar</button>
                                </div>
                            </td>
                        </form>
                    </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>

</main><!-- /.container -->
@endsection