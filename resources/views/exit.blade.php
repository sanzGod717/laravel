<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contador</title>
</head>
<body>
  <h1>START</h1>
@for($i=1;$i<=$num;$i++)
<h1> Contador Vai até:  {{$i}}</h1>

@endfor

  <x-footer></x-footer>
</body>
</html>