@extends('index')

@section('content')
    <form class="form" method="POST" action="{{ route('atualizar.cliente', $findCliente->id) }}">
        @csrf
        @method("PUT")
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Editar Cliente</h1>
        </div>
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" value="{{ isset($findCliente->nome) ? $findCliente->nome : old('nome') }}" class="form-control @error('nome') is-invalid @enderror" name="nome">
            @if ($errors->has('nome'))
                <div class="invalid-feedback"> {{ $errors->first('nome') }} </div>
            @endif
          </div>
          <div class="mb-3">
              <label class="form-label">CPF</label>
              <input type="text" value="{{ isset($findCliente->cpf) ? $findCliente->cpf : old('cpf') }}" class="form-control @error('cpf') is-invalid @enderror" name="cpf"id="mascara_cpf" maxlength="14">
              @if ($errors->has('cpf'))
                  <div class="invalid-feedback"> {{ $errors->first('cpf') }} </div>
              @endif
            </div>
          <div class="mb-3">
            <label class="form-label">E-mail</label>
            <input type="text" value="{{ isset($findCliente->email) ? $findCliente->email : old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email">
            @if ($errors->has('email'))
                <div class="invalid-feedback"> {{ $errors->first('email') }} </div>
            @endif
          </div>
          <button type="submit" class="btn btn-success">Gravar</button>
    </form>
@endsection