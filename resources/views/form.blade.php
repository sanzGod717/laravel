@extends('Layout.app')

@section('conteudo')
<div class="formulario">
        <h1>Formulário do Crud</h1>
        <form action="{{ route('create') }}" method="POST">
            @csrf
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha:</label>
             <input type="senha" id="senha" name="senha" required>

            <input type="submit" value="Enviar">
            
             <a href="/edit"><h1>Editar</h1></a>
             <a href="/show"><h1>Apagar</h1></a>
    <a href="/list"><h1>Lista</h1></a>
        </form>
    </div>
@endsection
