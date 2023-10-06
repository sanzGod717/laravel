<?php
namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

use App\Models\Login;
use App\Models\api;
use App\Models\invok;
use App\Models\Location;


class ApiController extends Controller
{
    public function index()
    {
      for($i=1;$i<=5;$i++){
       
     $endpoint = 'https://randomuser.me/api';
     $client = new Client();
		 $response = $client->get($endpoint);
		 $resul = json_decode($response->getBody(),
		false);
		
    foreach ($resul->results as $resulta){
    $name = $resulta->name;
    
    $first = $name->first;
    $last = $name->last;
    $name = $first." ".$last;
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
$apis = api::Create([
    "name" => $name,
    "gender" => $gender,
    "age" => $age,
    
]);
          //part of location 
        $location =  Location::Create([
         "city" => $city,
         "state" => $state,
         "country" => $country,
         "postcode" => $postCode,
         "road" => $road
          ]);
          
            /*
          $loca = $inv->Location->where("id",$loca_id)->first();
          */
          
       //relationship check Pained controller 
       if ($apis !=null and  $location != null)
       {
        echo "<pre> Api : ";
        dump($apis->name,$apis->gender,$apis->age,$apis->login_id); 
        echo "<br> Local: ";
        dump($location->city,$location->state, $location-> country, $location->postcode, $location->road);
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