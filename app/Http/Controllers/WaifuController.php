<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pessoa;
use Illuminate\Support\Facades\Http;

class WaifuController extends Controller
{
    public function index ()
      {
        $mesAtual = date('m');
        $anoAtual = date('Y');
        $diasNoMes =
        cal_days_in_month(CAL_GREGORIAN, $mesAtual, $anoAtual);
        $dnm = [
          'dias' => $diasNoMes
          ];
       return view('index',$dnm);
      }
    public function waifu ()
    {
     
     $response = Http::get('https://api.waifu.im/search', 
         [
    'included_tags' => 'maid',
    'height' => '>=2000'
          ]);

  $data = $response->json();
  
$inv = $data["images"][0];


$url = $inv['url'];
$width = $inv['width'];
$height = $inv['height'];
$color = $inv['dominant_color'];

   $data = [
   "url"    =>   $url,
   "width"  =>   $width,
   "height" =>   $height,
   "cor"    =>   $color
   ];
     return view('waifu',$data);
    }
    public function getNum (Request $r){
      $data = [
        'num' => $r->qnt
        ];
      return view('exit',$data);
    }
    
}
