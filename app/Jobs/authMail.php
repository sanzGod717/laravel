<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\RgMail;
use Illuminate\Support\Facades\Mail;

class authMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
  private $name;
    /**
     * Create a new job instance.
     */
    public function __construct($nome)
    {
       $this->name = $nome;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
     $mail = new RgMail($this->name);
    // return $mail;
     Mail::to('tyxxf@telegmail.com')->send($mail);
    }
}
