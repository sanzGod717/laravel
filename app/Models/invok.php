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
    ["id_api","id_loca"];
    public function Api()
{
    return $this->belongsTo(Apis::class, 'id_api');
}
public function Location()
{
    return $this->belongsTo(Locations::class, 'id_loca');
}
}
