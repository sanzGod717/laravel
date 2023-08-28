<?php

namespace App\Http\Controllers;

use App\Models\bulletf;
use Illuminate\Http\Request;

class BulletFController extends Controller
{

    public function index(request $r)
    {
    $mes = strtoupper($r->input('mes'));
    $tipo = $r->input('resposta');
    $dia = $r->input('dia');
    $opDia = $r->input('outro');
    $task = $r->input('task');
      if (isset($tipo)){
      $bujo=Bulletf::create([
        "Mes"=> $mes,
        "Tipo"=>$tipo,
        "Dia"=>$dia,
        "Opdia"=> $opDia,
        "Task"=>$task
        ]);
        $cleanUrl = $r->fullUrl();
        return view("index");
      }else {
        
        return view('bulletFuturo');
      }
    }
}

