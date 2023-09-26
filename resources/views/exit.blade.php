@extends('Layout.app')
@section('titulo')
Contador
@endsection
@section('conteudo')
  <h1>START</h1>
@for($i=1;$i<=$num;$i++)
<h1> Contador Vai até:  {{$i}}</h1>

@endfor
versão : {{$versao}}
@endsection