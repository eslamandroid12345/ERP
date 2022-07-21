<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface InvoiceRepositoryInterface
{

    public function store(Request $request);
    public function create();

}