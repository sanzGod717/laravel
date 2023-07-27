<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pessoas;

class Api extends Controller
{
    public function index (){
        
      return view('index');
      
      
    }
    public function waifu (){
     
     $curl = curl_init();
     
     curl_setopt_array($curl, [
	CURLOPT_URL => "https://api.waifu.im/search?included_tags=maid&height=>=2000",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1]);

 $response = json_decode(curl_exec($curl),true);

$inv = $response["images"][0];


$url = $inv['url'];
$width = $inv['width'];
$height = $inv['height'];
$color = $inv['dominant_color'];

   $data = [
     "url" => $url,
    "width" => $width,
   "height" => $height,
   "cor" => $color
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
