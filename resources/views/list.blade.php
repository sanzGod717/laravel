@extends('Layout.app')

@section('conteudo')
<h1>Lista de Login</h1>
 <table style="border-collapse: collapse; width: 100%;">
    <thead>
       <tr>
            <th style="background-color: #f2f2f2; padding: 8px; text-align: left; border-bottom: 1px solid #ddd; color: black;">ID</th>
            <th style="background-color: #f2f2f2; padding: 8px; text-align: left; border-bottom: 1px solid #ddd; color: black;">Email</th>
            <th style="background-color: #f2f2f2; padding: 8px; text-align: left; border-bottom: 1px solid #ddd; color: black;">Senha</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($logins as $login)
            <tr>
              <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">{{ $login->id }}</td>
            <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">{{ $login->EMAIL }}</td>
            <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">{{ $login->SENHA }}</td>
          </tr>
            @endforeach
        </tbody>
    </table>
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