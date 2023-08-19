<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class invok extends Model
{
    public $timestamps = false;
    use HasFactory;
    use SoftDeletes;
    protected $fillable = 
    ["api_id","location_id"];
    public function Api()
{
    return $this->hasOne(Api::class,'id' ,'id_api');
}
public function Location()
{
    return $this->hasOne(Location::class, 'id','id_loca');
}
}
