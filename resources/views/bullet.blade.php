@extends('Layout.app')

@section('conteudo')

<form method="GET" action="/bullet">
    @csrf
    <label for="nome">Mês:</label>
    <input type="text" id="mes" name="mes" maxlength="3" pattern="[A-Za-z]+" required>

  <label for="resposta1">Tipo de anotações:</label>
   
   Tarefa : 
   
    <input type="radio" id="taf" name="resposta" value="•" required><br>
   
 Aniversário : 
    
    <input type="radio" id="ani" name="resposta" value="°" required><br><br>
   

  <label for="numero1">Dia :</label>
  
    <input type="number" id="dia" name="dia"  min="1" max="31" required><br><br>

   <label for="numero1">Outro Dia(opcional) :</label>
  
    <input type="number" id="outro" name="outro"  min="1" max="31"><br><br>
   <br><br>
    <center>
   <input type="text" name="task" placeholder="Digite sua Task aqui">

    <button type="submit">Salvar</button>
    </center>
</form>


@endsection('conteudo')