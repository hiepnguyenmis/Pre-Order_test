<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $table='bills';
    protected $primaryKey='id';
    protected $fillable=[
        'id',
        'user_id',
        'creatAt'
    ];
    public $timestamps=false;
    public $incrementing=false;

    public function Billdetail(){
        return $this->hasMany(BillDetail::class,'id','id');
    }

}
