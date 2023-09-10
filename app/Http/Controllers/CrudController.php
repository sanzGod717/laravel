<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use App\Models\Api;

class CrudController extends Controller
 {
    public function __construct()
    {
    $this->middleware('hash.password')->only('store');
    }
    public function index()
    {
      
    
      return view('form');
    }
     public function all(){
       
           $logins = Login::all();
           $api = Api::all();
    return view('list', ['logins' => $logins],['api' => $api]);

    }
     public function create(Request $request)
    {
        
        $email = $request->input('email');
        $senha = $request->input('senha');
        $hash = password_hash($senha, PASSWORD_DEFAULT);
        
         $login = Login::all();
         $id = Api::all()->random();
         dump($login);
        Login::Create([
         "api_id" => $id->id,
         "EMAIL" => $email,
         "SENHA" => $hash
        ]);
        return redirect('/crud');
    }
    public function store(Request $request)
    {
       return redirect('/create');
    }
    protected function show()
    {
      return view('delete');
    }
    public function edit()
    {
        return view('edit');
    }
    public function update(Request $request)
    {
      $email = $request->input('nome_antigo');
      $senha= $request->input('senha_antiga');
      $senhaBh = Login::where("EMAIL",'=',$email)->first();
   
   if(isset($senhaBh->SENHA)) {
     $senhaBa = $senhaBh->SENHA;
   }
   else {echo "Seu Email não Existe";}
      
      if (Login::where("EMAIL","=", $email)->exists()) {
   
    echo "email verificado<br>";
    
    $emailU = $request->input('nome_novo');
    if ($senhaBa && password_verify
    ($senha,$senhaBa)) 
    {
      echo "senha Validada";
      $senhaU = $request->input('senha_novo');
      $hash = password_hash($senhaU, PASSWORD_DEFAULT);
      Login::where('EMAIL', '=', $email)->update([
         "EMAIL" => $emailU
        ]);
      $senhaaBd = Login::where('SENHA', $senha)->update([
         "SENHA" => $hash
        ]);
       return redirect('/crud');
    }
} else {
    echo "Senha incorreta";
}
    }
    public function destroy(request $request)
    {
    $email = $request->input('nome');
  
  if (Login::where("EMAIL","=", $email)->exists()) {
    Login::where("EMAIL","=", $email)->delete();
    return redirect('/crud');
} else {
    echo "seu email não existe";
       }
    }
}
