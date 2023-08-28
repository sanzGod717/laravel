@extends('Layout.app')

@section('conteudo')
@php
        use App\Models\Bulletm;
        use Illuminate\Support\Facades\DB;
        $mesAtual = date('m');
        $anoAtual = date('Y');
        $mes =
        cal_days_in_month(CAL_GREGORIAN, $mesAtual, $anoAtual);
     
       
       $results = DB::table('bulletms')->select('Day')->get();
      
       
       
@endphp
<form method="POST" action="/bulletM/filtro"> 
    @csrf
    @foreach ($results as $result)
  
      {{$day[] = $result->Day}}
      @endforeach
      <br>
    @for ($i = 1; $i <= $mes; $i++)
        {{ $i }}
        <input style="margin-left: 24px;" type="text" name="Day{{$i}}Week{{ isset($primeiraLetra[$i - 1]) ? $primeiraLetra[$i - 1] : '' }}" placeholder="{{ isset($primeiraLetra[$i - 1]) ? $primeiraLetra[$i - 1] : '' }}" 
          >
          
        <br>
        <br>
    @endfor
    <button style="margin-left: 288px;" type="submit">Enviar</button>
</form>
@endsection

