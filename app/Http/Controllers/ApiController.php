<?php
namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Models\apis;

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
    $gender = $resulta->gender;
    $email = $resulta->email;
    $password = $resulta->login->password;
    $age = $resulta->registered->age;
    }
         $user = apis::Create([
         "firstName" => $first,
         "lastName" => $last,
         "gender" => $gender,
         "age" => $age,
         "email" => $email,
         "password" => $password
        ]);
      }
  if($user->wasRecentlyCreated){
     echo "Sucesso";}else {echo "erro";}
     }
}