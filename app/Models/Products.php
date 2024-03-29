<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table ='products';
    protected $primaryKey='id';
    protected $fillable=[
        'id',
        'product_name',
        'product_amount',
        'product_quantity'
    ];
    public $timestamps=false;
    public $incrementing=false;
    public function BIllDetail(){
        $this->hasMany(Billdetail::class, 'id', 'id');
    }

}
