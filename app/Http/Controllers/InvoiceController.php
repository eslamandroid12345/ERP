<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInvoiceRequest;
use App\Interfaces\InvoiceRepositoryInterface;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public $invoiceRepositoryInterface;

    public function __construct(InvoiceRepositoryInterface $invoiceRepositoryInterface){

        $this->invoiceRepositoryInterface = $invoiceRepositoryInterface;
    }


    public function invoices(){

        return $this->invoiceRepositoryInterface->invoices();
    }

    public function store(StoreInvoiceRequest $request){

        return $this->invoiceRepositoryInterface->store($request);
    }


    public function create(){

        return $this->invoiceRepositoryInterface->create();
    }

    public function details($id){


        return $this->invoiceRepositoryInterface->details($id);
    }
}
