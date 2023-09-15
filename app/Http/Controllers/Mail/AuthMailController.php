<?php

namespace App\Http\Controllers\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\RgMail;
use Illuminate\Support\Facades\Mail;
use App\Jobs\authMail;

class AuthMailController extends Controller
{
   public function sendRgMail()
   {
     authMail::dispatch("mel");
    // return $mail;
   }
}
