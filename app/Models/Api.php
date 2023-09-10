<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Api extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ["name", "gender", "age", "login_id"];
    
    public function email ()
    {
      return $this->belongsTo('Api');
    }

}

