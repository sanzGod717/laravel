@extends('Layout.app')

@section('conteudo')
<form method="GET" action="/bulletM/filtro"> 
    @csrf
    @for ($i = 1; $i <= $mes; $i++)
        {{ $i }}

        <input style="margin-left: 20px;" type="text" name="id[]" placeholder="{{ isset($primeiraLetra[$i - 1]) ? $primeiraLetra[$i - 1] : '' }}">
        <br>
        <br>
    @endfor
    <button style="margin-left: 170px;" type="submit">Salvar</button>
</form>
@endsection

