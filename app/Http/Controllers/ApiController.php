<?php
namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Models\apis;
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
 
 $loca = $resulta->location->street;
 
 $road = $loca->name." , ".$loca->number;
    }
    
         $user = apis::Create([
         "name" => $nam,
         "gender" => $gender,
         "age" => $age,
         "email" => $email,
         "password" => $password,
         "local" => "teste"
        ]);
        
          //part of location 
          $api_id = $user->id;
      
          $location =  Locations::Create([
         "api_id" => $api_id,
         "city" => $city,
         "state" => $state,
         "country" => $country,
         "postcode" => $postCode,
         "road" => $road
          ]);
       }
  
  
   
if($user->wasRecentlyCreated and 
$location->wasRecentlyCreated)
   {
     echo "Sucesso";
   }else {echo "erro";}
      
    
          
     }
}