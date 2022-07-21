<?php

namespace App\Repositories;

use App\Interfaces\InvoiceRepositoryInterface;
use App\Models\Client;
use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceRepository implements InvoiceRepositoryInterface
{

    public function store(Request $request){


        try {

            DB::beginTransaction();

            $invoice = new Invoice();
            $invoice->invoice_number = $request->invoice_number;
            $invoice->invoice_date = $request->invoice_date;
            $invoice->total_paid = $request->total_paid;
            $invoice->client_id = $request->client_id;
            $invoice->save();


            $sell = Invoice::findOrFail($invoice->id);

            $sell->products()->sync($request->product);

            DB::commit();
            return "success operations";


        }catch (\Exception $exception){

            DB::rollBack();
            return $exception->getMessage();
        }

    }

    public function create()
    {

        $clients = Client::select('id','name')->get();
        $products = Product::get();
        return view('invoices.create',compact('clients','products'));
    }
}