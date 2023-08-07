<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bullet extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $fillable = ["Mes","Tipo","Dia","Opdia","Task"];
}
