<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\RgMail;
use Illuminate\Support\Facades\Mail;

class AuthMailController extends Controller
{
   public function sendRgMail()
   {
     $mail = new RgMail();
     return $mail;
    // Mail::to('tyxxf@telegmail.com')->send($mail);
   }
}
