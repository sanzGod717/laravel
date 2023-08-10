<?php

namespace App\Http\Controllers;

use App\Models\bullet;
use Illuminate\Http\Request;

class BulletController extends Controller
{

    public function index(request $r)
    {
    $mes = strtoupper($r->input('mes'));
    $tipo = $r->input('resposta');
    $dia = $r->input('dia');
    $opDia = $r->input('outro');
    $task = $r->input('task');
      if (isset($tipo)){
      $bujo=bullet::create([
        "Mes"=> $mes,
        "Tipo"=>$tipo,
        "Dia"=>$dia,
        "Opdia"=> $opDia,
        "Task"=>$task
        ]);
        return view("index");
      }else {
        return view('bullet');}
    }
}

