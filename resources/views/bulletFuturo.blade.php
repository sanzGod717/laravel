@extends('Layout.app')

@section('conteudo')
<h1 style="background-color: #8A2BE2;
  color: #fff;
  padding: 20px;
  text-align: center;
  font-size: 36px;" > Registro Futuro</h1>
<form method="GET" action="/bulletF">
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

    </center>
   <p> <button type="submit">Salvar</button>
    <button style="
  background-color: #8A2BE2;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  font-size: 16px;
  float: right;
  cursor: pointer;" type="button" onclick="location.href='/bulletF/list'">Veja a Lista!</button>
</form>


@endsection('conteudo')