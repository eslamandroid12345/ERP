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



    public function sell_product(){

        return $this->hasMany(SellProduct::class,'invoice_id','id');
    }

}
