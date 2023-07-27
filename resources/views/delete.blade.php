@extends('Layout.app')

@section('conteudo')
<form action="/delete" method="GET">
        <label for="nome">Nome:</label>
        <input style="background-color: #f2f2f2;border: 1px solid #ccc;
    padding: 5px;
    font-size: 16px;
    color: #333;"type="text" id="nome" name="nome">

        <button type="submit">Apagar</button>
    </form>
@endsection