<?php
namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Models\apis;
use App\Models\invok;
use App\Models\Locations;


class ApiController extends Controller
{
    public function index()
    {
      for($i=1;$i<=10;$i++){
       
     $endpoint = 'https://randomuser.me/api';
     $client = new Client();
		 $response = $client->get($endpoint);
		 $resul = json_decode($response->getBody(),
		false);
		
    foreach ($resul->results as $resulta){
    $name = $resulta->name;
    
    $first = $name->first;
    $last = $name->last;
    $nam = $first." ".$last;
    $gender = $resulta->gender;
    $email = $resulta->email;
    $password = $resulta->login->password;
    $age = $resulta->registered->age;
   
 $city = $resulta->location->city;
 $state = $resulta->location->state;
 $country = $resulta->location->country;
 $postCode = $resulta->location->postcode;
 
 $local = $resulta->location->street;
 
 $road = $local->name." , ".$local->number;
    }
    
         $apis = apis::Create([
         "name" => $nam,
         "gender" => $gender,
         "age" => $age,
         "email" => $email,
         "password" => $password,
         "local" => "teste"
        ]);
        
          //part of location 
        $location =  Locations::Create([
         "city" => $city,
         "state" => $state,
         "country" => $country,
         "postcode" => $postCode,
         "road" => $road
          ]);
          $loca_id = $location->id;
          $api_id = $apis->id;
          
          $inv = invok::create([
            "id_api"=>$api_id,
            "id_loca"=>$loca_id
            ]);
          $loca = $inv->Location->where("id", $loca_id)->first();
          
          $api = $inv->Api->where("id", $api_id)->first();
       //relationship check Pained controller 
       if ($api_id == $loca_id)
       {
      echo "<pre> Api Id : ". $api. "<br> Localization Id : ". $loca. "<br></pre>";
        continue;
       }else{die;}
       }
   
if($apis->wasRecentlyCreated and 
$location->wasRecentlyCreated)
   {
     echo "<hr><p>success";
   }else {echo "error";}
   
   }
}