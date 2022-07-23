<?php

namespace App\Interfaces;

use App\Http\Requests\StoreInvoiceRequest;

interface InvoiceRepositoryInterface
{

    public function invoices();
    public function store(StoreInvoiceRequest $request);
    public function create();
    public function details($id);


}