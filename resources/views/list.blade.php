@extends('Layout.app')

@section('conteudo')
<h1>Lista de Login</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logins as $login)
            <tr>
                <td>{{ $login->id }}</td>
                <td>{{ $login->NOME }}</td>
                <td>{{ $login->EMAIL }}</td>
                <td>{{ $login->SENHA }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection