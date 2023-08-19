<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="app.css">
  <style>
  h1 {
    color: #333;
    font-size: 24px;
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type="text"],
input[type="password"] {
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 16px;
    margin-bottom: 20px;
}

button[type="submit"] {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    font-size: 16px;
    cursor: pointer;
}
  ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

li {
  margin-bottom: 10px;
  padding-left: 20px;
  background-image: url('bullet.png');
  background-repeat: no-repeat;
  background-position: 0 5px;
}
    .formulario {
    background-color: #054f77;
    padding: 20px;
    border-radius: 5px;
}

.formulario label {
    display: block;
    font-weight: bold;
    margin-bottom: 10px;
}

.formulario input[type="text"],
.formulario input[type="email"],
.formulario input[type="senha"],
.formulario textarea {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 3px;
    margin-bottom: 20px;
}

.formulario input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}</style>
  <title>Index</title>
</head>
<body style=" background-color: black; color: white; ">

  
 
  
  <main style=" margin-top: 20px;
      margin-bottom: 20px;"> 
  
  @yield('conteudo')
  
  </main>
  
<x-footer></x-footer>

</body>
</html>