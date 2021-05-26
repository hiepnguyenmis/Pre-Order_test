<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    use HasFactory;

    protected $table='billdetail';
    protected $primaryKey='id';
    protected $fillable=[
        'id',
        'bill_id',
        'product_id'
    ];
    public $timestamps=false;
    public $incrementing=false;


}
