<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellProduct extends Model
{
    use HasFactory;

    protected $fillable = [

        'invoice_id',
        'product_name',
        'quantity',
        'total_amount',
    ];


    public function invoice(){


        return $this->belongsTo(Invoice::class,'invoice_id','id');
    }



}
