{{-- Extends da index --}}
@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Clientes</h1>
    </div>
    <div>
        <form action="{{ route('cliente.index') }}" method="GET">
            <input type="text" name="pesquisar" placeholder="Digite o nome"/>
            <button> Pesquisar </button>
            <a type="button" href="{{ route('cadastrar.cliente') }}" class="btn btn-success float-end">
                Incluir cliente
            </a>
        </form>
        <div>
            @if ($findCliente->isEmpty())
                <p>Não existem dados</p>
            @else
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Cpf</th>
                            <th>Email</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($findCliente as $cliente)                        
                            <tr>
                                <td>{{ $cliente->nome }}</td>
                                <td>{{ $cliente->cpf }}</td>
                                <td>{{ $cliente->email }}</td>
                                <td>
                                    <a href="" class="btn btn-light btn-sm">
                                        Editar
                                    </a>
                                    <meta name="csrf-token" content="{{ csrf_token() }}"/>
                                    <a onclick="deleteRegistroPaginacao('{{ route('cliente.delete') }}', {{ $cliente->id}} )" class="btn btn-danger btn-sm">
                                        Excluir
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection