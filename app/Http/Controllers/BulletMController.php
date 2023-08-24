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
   
 public function filtro (request $r){
   
        $mesAtual = date('m');
        $anoAtual = date('Y');
        $mes =
        cal_days_in_month(CAL_GREGORIAN, $mesAtual, $anoAtual);
       
  foreach ($r->all() as $key => $value) {
  if (strpos($key, 'id') === 0 && $value !== NULL) {
    
   $inputs = [$key => $value];
   $input []= $inputs;
   }
}

dump($input); 



   
   
   
//return redirect('/bulletM/add?' . $queryString);
 }
   public function add (request $r){
   
     echo "ola";
   }
}
 