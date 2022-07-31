<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [

        'product_name',
        'sell_price',

    ];

    public function invoice(){

        return $this->belongsToMany(Invoice::class,'sell_products','product_id','invoice_id','id','id')->withPivot(['quantity','total_amount'])->withTimestamps();
    }


}
