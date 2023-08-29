@extends('Layout.app')

@section('conteudo')
@php
        
        $mesAtual = date('m');
        $anoAtual = date('Y');
        $mes =
        cal_days_in_month(CAL_GREGORIAN, $mesAtual, $anoAtual);
     @endphp
<div style="
background-color: #f2f;
  height: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
">
  <p style="
  color: #000000;
  font-size: 24px;
  font-weight: bold;
  ">Add Tasks</p>
</div>

<form method="POST" action="/bulletM/filtro"> 
    @csrf
   
      <br>
    @for ($i = 1; $i <= $mes; $i++)
        {{ $i }}
        <input style="margin-left: 24px;" type="text" name="Day{{$i}}Week{{ isset($primeiraLetra[$i - 1]) ? $primeiraLetra[$i - 1] : '' }}" placeholder="{{ isset($primeiraLetra[$i - 1]) ? $primeiraLetra[$i - 1] : '' }}" 
          >
          
        <br>
        <br>
    @endfor
<a href="/bulletMList">
  <button type="button" style="
  display: inline-block;
  padding: 10px 20px;
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  background-color: #4CAF50;
  color: #fff;
  border-radius: 5px;
  border: none;
  cursor: pointer;
  transition: background-color 0.3s ease;
  " 
onclick="location.href='/bulletMList'">Lista</button>
</a>
    <button style="
  background-color: #4CAF0;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;" type="submit">Enviar</button>
</form>
@endsection

