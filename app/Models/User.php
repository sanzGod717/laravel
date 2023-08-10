<?php

namespace App\Models;

use App\Models\Task;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\Has
Factory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
    ];


    public function Taks(){
      return $this->hasMany(Taks::class);
    }
    public function Category()
  {
    return $this->hasMany(Categories::class);
  }
}
