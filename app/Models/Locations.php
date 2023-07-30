<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ["api_id", "city", "state", "country", "postcode", "street", "road"];

    public function api()
    {
        return $this->belongsTo(Apis::class);
    }
}