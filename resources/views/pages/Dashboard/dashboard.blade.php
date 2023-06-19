@extends('index')
@section('content')
    <h1 class="h2">Dashboard</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-margin">
                    <div class="card-header no-border">
                        <h5 class="card-title">Último Cadastro de Produto</h5>
                    </div>
                    <div class="card-body pt-0">
                        <div class="widget-49">
                            <div class="widget-49-title-wrapper">
                                <div class="widget-49-date-primary border-bottom mb-3">
                                    <span class="widget-49-date-day">{{ $diaProduto }}</span>
                                </div>
                            </div>
                            <div class="widget-49-meeting-info">
                                <span class="widget-49-pro-title">Nome: {{ $ultimoProduto->nome }}</span>
                            </div>
                            <div class="widget-49-meeting-info">
                                <span class="widget-49-pro-title">Valor: {{ $ultimoProduto->valor }}</span>
                            </div>
                            <div class="widget-49-meeting-action">
                                <a href="{{ route('produto.index') }}" class="btn btn-sm btn-flash-border-primary">Ver
                                    Todos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-margin">
                    <div class="card-header no-border">
                        <h5 class="card-title">Último Cadastro de Cliente</h5>
                    </div>
                    <div class="card-body pt-0">
                        <div class="widget-49">
                            <div class="widget-49-title-wrapper">
                                <div class="widget-49-date-primary border-bottom mb-3">
                                    <span class="widget-49-date-day">{{ $diaCliente }}</span>
                                </div>
                            </div>
                            <div class="widget-49-meeting-info">
                                <span class="widget-49-pro-title">Nome: {{ $ultimoCliente->nome }}</span>
                            </div>
                            <div class="widget-49-meeting-info">
                                <span class="widget-49-pro-title">Email: {{ $ultimoCliente->email }}</span>
                            </div>
                            <div class="widget-49-meeting-action">
                                <a href="{{ route('clientes.index') }}" class="btn btn-sm btn-flash-border-primary">Ver
                                    Todos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-margin">
                    <div class="card-header no-border">
                        <h5 class="card-title">Último Cadastro de Venda</h5>
                    </div>
                    <div class="card-body pt-0">
                        <div class="widget-49">
                            <div class="widget-49-title-wrapper">
                                <div class="widget-49-date-primary border-bottom mb-3">
                                    <span class="widget-49-date-day">{{ $diaVenda }}</span>
                                </div>
                            </div>
                            <div class="widget-49-meeting-info">
                                <span class="widget-49-pro-title">Produto: {{ $ultimaVenda->produto->nome }}</span>
                            </div>
                            <div class="widget-49-meeting-info">
                                <span class="widget-49-pro-title">Cliente: {{ $ultimaVenda->cliente->nome }}</span>
                            </div>
                            <div class="widget-49-meeting-action">
                                <a href="{{ route('vendas.index') }}" class="btn btn-sm btn-flash-border-primary">Ver
                                    Todos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-margin">
                    <div class="card-header no-border">
                        <h5 class="card-title">Último Cadastro de Usuário</h5>
                    </div>
                    <div class="card-body pt-0">
                        <div class="widget-49">
                            <div class="widget-49-title-wrapper">
                                <div class="widget-49-date-primary border-bottom mb-3">
                                    <span class="widget-49-date-day">{{ $diaUser }}</span>
                                </div>
                            </div>
                            <div class="widget-49-meeting-info">
                                <span class="widget-49-pro-title">Produto: {{ $ultimoUser->name }}</span>
                            </div>
                            <div class="widget-49-meeting-info">
                                <span class="widget-49-pro-title">Cliente: {{ $ultimoUser->email }}</span>
                            </div>
                            <div class="widget-49-meeting-action">
                                <a href="{{ route('usuario.index') }}" class="btn btn-sm btn-flash-border-primary">Ver
                                    Todos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection