@extends('index')
@section('content')
    <form method="POST" action="{{ route('usuario.cadastro') }}">
        @csrf
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Cadastrar novo produto</h1>
        </div>
        <div class="mb-3">
            <label class="form-label">name</label>
            <input type="text" value="{{ old('name') }}"class="form-control @error('name') is-invalid @enderror"
                name="name">
            @if ($errors->has('name'))
                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">E-mail</label>
            <input id="mascara-email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror"
                name="email">
            @if ($errors->has('email'))
                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Senha</label>
            <input id="senha" type="password" value="{{ old('password') }}"
                class="form-control @error('password') is-invalid @enderror" name="password">
            @if ($errors->has('password'))
                <div class="invalid-feedback">{{ $errors->first('password') }}</div>
            @endif
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="mySwitch" name="Mostrar Senha?" value="yes">
                <label class="form-check-label" for="mySwitch">Mostrar Senha?</label>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Cadastrar</button>
        <form method="GET">
            <a type="button" class="btn btn-danger" href="{{ route('usuario.index') }}">Cancelar</a>
        </form>
    </form>
    <script>
        botao = document.getElementById('mySwitch')
        senha = document.getElementById('senha')

        botao.addEventListener('change', function() {
            if (this.checked) {
                senha.type = 'text';
            } else {
                senha.type = 'password';
            }
        });
    </script>
@endsection
