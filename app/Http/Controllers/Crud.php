<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logins;

class Crud extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
    
      return view('form');
    }

    /**
     * Show the form for creating a new resource.
     */
     public function all(){
       
           $logins = Logins::all();

    return view('list', ['logins' => $logins]);

    }
     
    public function create(Request $request)
    {
        $nome = $request->input('nome');
        $email = $request->input('email');
        $senha = $request->input('senha');
        $hash = password_hash($senha, PASSWORD_DEFAULT);
         
                  Logins::Create([
         "NOME" => $nome,
         "EMAIL" => $email,
         "SENHA" => $hash
        ]);
        return redirect('/crud');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        
        
        return redirect('/create');

    }

    /**
     * Display the specified resource.
     */
    protected function show()
    {
        
        return view('delete');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view('edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
      $nome = $request->input('nome_antigo');
      $senha= $request->input('senha_antiga');
      $senhaBh = Logins::where("EMAIL",$nome)->first();
      $senhaBa = $senhaBh->SENHA;
      
      if (Logins::where("EMAIL","=", $nome)->exists()) {
    echo "email verificado e porem a senha esta incorreta";
    $nomeU = $request->input('nome_novo');
    Logins::where('EMAIL', '=', $nome)->update([
         "EMAIL" => $nomeU
        ]);
        
        if ($senhaBh && password_verify($senha,$senhaBa)) {

     $senhaU = $request->input('senha_novo');
      $hash = password_hash($senhaU, PASSWORD_DEFAULT);
      $senhaaBd = Logins::where('SENHA', $senha)->update([
         "SENHA" => $hash
        ]);
       return redirect('/crud');
}
} else {
    echo "Dados incorretos";
}
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(request $request)
    {
    $NOME = $request->input('nome');
  
  if (Logins::where("NOME","=", $NOME)->exists()) {
    Logins::where("NOME","=", $NOME)->delete();
    return redirect('/crud');
} else {
    echo "seu nome não existe";
}
}
}
