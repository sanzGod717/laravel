@extends('Layout.app')

@section('conteudo')
<form action="{{ route('update') }}" method="POST">
            @csrf
          <label for="nome">Email antigo:</label>
        <input type="text" id="nome_antigo" name="nome_antigo">

        <label for="senha_antiga">Senha antiga:</label>
        <input type="password" id="senha_antiga" name="senha_antiga">

      <br><hr><br>
      
       <label for="nome">Email novo:</label>
        <input type="text" id="nome_novo" name="nome_novo">

        <label for="senha_antiga">Senha nova:</label>
        <input type="password" id="senha_nova" name="senha_nova">
        
        <button type="submit">Enviar</button>
@endsection
