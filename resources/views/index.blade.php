@extends('Layout.app')

@section('conteudo')
@php
$mesAtual = date('m');
        $anoAtual = date('Y');
        $dias =
        cal_days_in_month(CAL_GREGORIAN, $mesAtual, $anoAtual);
@endphp
    <ul>
      
      <li> 
      <a href="http://127.0.0.1:8000/waifu ">Waifus</a></li>
     
      <li>
    <a href="http://127.0.0.1:8000/count/11"> Contador </a></li>
    
  <li>
    <a href="http://127.0.0.1:8000/crud"> Crud </a></li>
    
     <li>
    <a href="http://127.0.0.1:8000/api"> Api </a></li>
      
     <li>
    <a href="http://127.0.0.1:8000/bulletF"> Bujo Futuro </a></li>
           <li>
    <a href="http://127.0.0.1:8000/bulletM/{{$dias}}"> Bujo Mensal </a></li>
    </ul>

@endsection



