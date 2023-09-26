@extends('Layout.app')
@section('titulo')
Lista de Usuarios
@endsection
@section('conteudo')
<h1>Lista de Login</h1>
 <table style="border-collapse: collapse; width: 100%;">
    <thead>
       <tr>
            <th style="background-color: #f2f2f2; padding: 8px; text-align: left; border-bottom: 1px solid #ddd; color: black;">ID</th>
            <th style="background-color: #f2f2f2; padding: 8px; text-align: left; border-bottom: 1px solid #ddd; color: black;">Email</th>
            <th style="background-color: #f2f2f2; padding: 8px; text-align: left; border-bottom: 1px solid #ddd; color: black;">Senha</th>
            <th style="background-color: #f2f2f2; padding: 8px; text-align: left; border-bottom: 1px solid #ddd; color: black;">Id_Api</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($logins as $login)
            <tr>
              <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">{{ $login->id }}</td>
            <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">{{ $login->EMAIL }}</td>
            <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">{{ $login->SENHA }}</td>
              <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">{{ $login->api_id }}</td>
          </tr>
            @endforeach
        </tbody>
    </table>
    <h1>Lista das Apis</h1>
 <table style="border-collapse: collapse; width: 100%;">
    <thead>
       <tr>
            <th style="background-color: #f2e2f7; padding: 8px; text-align: left; border-bottom: 1px solid #ddd; color: black;">ID</th>
            <th style="background-color: #f2f2f2; padding: 8px; text-align: left; border-bottom: 1px solid #ddd; color: black;">Name</th>
            <th style="background-color: #f2f2f2; padding: 8px; text-align: left; border-bottom: 1px solid #ddd; color: black;">Genero</th>
            <th style="background-color: #f2f2f2; padding: 8px; text-align: left; border-bottom: 1px solid #ddd; color: black;">Idade</th>
            <th style="background-color: #f2f2f2; padding: 8px; text-align: left; border-bottom: 1px solid #ddd; color: black;">Id_Login</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($api as $apis)
            <tr>
              <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">{{ $apis->id }}</td>
            <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">{{ $apis->name }}</td>
            <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">{{ $apis->gender }}</td>
              <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">{{ $apis->age }}</td>
              <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">{{ $apis->login_id }}</td>
          </tr>
            @endforeach
        
    </table>
        </tbody>
          
    
    <!--   
   
    </thead>
    <tbody>
        @foreach ($logins as $login)
        <tr>
            <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">{{ $login->id }}</td>
            <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">{{ $login->email }}</td>
            <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">{{ $login->senha }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
    -->
    
   
@endsection