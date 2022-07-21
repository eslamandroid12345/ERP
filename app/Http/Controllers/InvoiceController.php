<?php

namespace App\Http\Controllers;

use App\Interfaces\InvoiceRepositoryInterface;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public $invoiceRepositoryInterface;

    public function __construct(InvoiceRepositoryInterface $invoiceRepositoryInterface){

        $this->invoiceRepositoryInterface = $invoiceRepositoryInterface;
    }


    public function store(Request $request){

        return $this->invoiceRepositoryInterface->store($request);
    }


    public function create(){

        return $this->invoiceRepositoryInterface->create();
    }
}
