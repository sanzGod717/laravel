<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Apis extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ["name", "gender", "age", "email", "password"];

}

