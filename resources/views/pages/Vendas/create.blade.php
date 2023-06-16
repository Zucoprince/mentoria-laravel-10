@extends('index')
@section('content')
    <form method="POST" action="{{ route('vendas.cadastro') }}">
        @csrf
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Cadastrar nova venda</h1>
        </div>
        <div class="mb-3">
            <label class="form-label">Numeração</label>
            <input type="text" disabled value="{{ $findNumeracao }}"
                class="form-control @error('numero_venda') is-invalid @enderror" name="numero_venda">
            @if ($errors->has('numero_venda'))
                <div class="invalid-feedback">{{ $errors->first('numero_venda') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Produto</label>
            <select class="form-select" aria-label="Default select example" name="produto_id">
                <option selected>Clique para selecionar o produto</option>
                @foreach ($findProduto as $produto)
                    <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Cliente</label>
            <select class="form-select" aria-label="Default select example" name="cliente_id">
                <option selected>Clique para selecionar o cliente</option>
                @foreach ($findCliente as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Cadastrar</button>
        <form method="GET">
            <a type="button" class="btn btn-danger" href="{{ route('produto.index') }}">Cancelar</a>
        </form>
    </form>
@endsection
