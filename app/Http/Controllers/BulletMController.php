<?php

namespace App\Http\Controllers;
use App\Models\Bulletm;
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
        $input = [];
        
  foreach ($r->all() as $key => $value) {
  if (strpos($key, 'Day') === 0 && $value !== NULL) {
    
   $input = [$key => $value];
   
  
   BulletM::create([
     "Day" => $key,
     "Task" => $value
     ]);
   
   
   }
}
   
return redirect("/bulletM/00");



 }
 
 
   
}
 