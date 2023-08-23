<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class BulletMController extends Controller
{
   public function index (request $r){
   
    $mes = $r->mes;
$primeiraLetra = array();

foreach (range(1, $mes) as $dia) {
    $data = date("Y-m-$dia");
    $diaSemana = date("l", strtotime($data));
    $primeiraLetra[] = substr($diaSemana, 0, 1);
}

$data1 = [
    'mes' => $mes,
    'primeiraLetra' => $primeiraLetra,
];

return view("bulletMensal", $data1);
   }
   
 public function filtro (request $request){
  ini_set('memory_limit', '256M'); 
   $data = array_filter($request->all(), function($value) {
    return !empty($value);
});
$queryString = http_build_query($data);
return redirect('/bulletM/add?' . $queryString);
 }
   public function add (request $r){
     echo "ola";
   }
}
 