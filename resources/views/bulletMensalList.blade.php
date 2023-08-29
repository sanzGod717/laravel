@extends('Layout.app')

@section('conteudo')
<html>
  <head>
    <style>
      table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

th {
  background-color: #f2f;
}

tr:nth-child(even) {
  background-color: #f2f2f;
}
    </style>
  </head>
  <body>
    <h2> List For Taks of Month on {{ strftime('%B') }}</h2>
    <table>
  <thead>
    <tr>
      <th>Day</th>
      <th>Task</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($results as $result)
    <tr>
      <td>{{$result->Day}}</td>
      <td>{{$result->Task}}</td>
    </tr>
    @endforeach

  </tbody>
</table>
  </body>
</html>
@endsection
