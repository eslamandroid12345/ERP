<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [

        'invoice_number',
        'invoice_date',
        'total_paid',
        'client_id'

    ];

    public function client(){

        return $this->belongsTo(Client::class,'client_id','id');
    }



    public function product(){

        return $this->belongsToMany(Product::class,'sell_products','invoice_id','product_id','id','id')->withPivot(['quantity','total_amount'])->withTimestamps();
    }

}
