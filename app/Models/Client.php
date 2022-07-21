<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'address'

    ];

    public function invoices(){

        return $this->hasMany(Invoice::class,'client_id','id');
    }
}
