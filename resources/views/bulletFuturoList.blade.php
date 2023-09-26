@extends('Layout.app')
@section('titulo')
Lista Bullet Futuro
@endsection
@section('conteudo')
<h1>Lista do Registro Futuro</h1>
 <table style="border-collapse: collapse; width: 100%;">
    <thead>
       <tr>
            <th style="background-color: #5f4b8b; padding: 8px; text-align: left; border-bottom: 1px solid #ddd; color: black;">ID</th>
            <th style="background-color: #5f4b8b; padding: 8px; text-align: left; border-bottom: 1px solid #ddd; color: black;">Mes</th>
            <th style="background-color: #5f4b8b; padding: 8px; text-align: left; border-bottom: 1px solid #ddd; color: black;">Tipo</th>
            <th style="background-color: #5f4b8b; padding: 8px; text-align: left; border-bottom: 1px solid #ddd; color: black;">Dia</th>
            <th style="background-color: #5f4b8b; padding: 8px; text-align: left; border-bottom: 1px solid #ddd; color: black;">OpDia</th>
            <th style="background-color: #5f4b8b; padding: 8px; text-align: left; border-bottom: 1px solid #ddd; color: black;">Task</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($bf as $bfn)
            <tr>
              <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">{{ $bfn->id }}</td>
            <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">{{ $bfn->Mes }}</td>
            <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">{{ $bfn->Tipo }}</td>
              <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">{{ $bfn->Dia }}</td>
              <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">{{ $bfn->Opdia }}</td>
              <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">{{ $bfn->Task }}</td>
          </tr>
            @endforeach
        </tbody>
    </table>