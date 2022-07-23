<?php

namespace App\Repositories;

use App\Http\Requests\StoreInvoiceRequest;
use App\Interfaces\InvoiceRepositoryInterface;
use App\Models\Client;
use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceRepository implements InvoiceRepositoryInterface
{



    public function invoices()
    {
        $invoices = Invoice::with(['sell_product'])->simplePaginate(3);

        return view('invoices.index',compact('invoices'));
    }

    public function store(StoreInvoiceRequest $request){

        try {

            DB::beginTransaction();

            $invoice = new Invoice();
            $invoice->invoice_number = $request->invoice_number;
            $invoice->invoice_date = $request->invoice_date;
            $invoice->total_paid = $request->total_paid;
            $invoice->client_id = $request->client_id;
            $invoice->save();

            $sell = Invoice::findOrFail($invoice->id);

            $details = [];
            for($i = 0 ; $i < count($request->product_name) ; $i++){


                $details[$i]['product_name'] = $request->product_name[$i];
                $details[$i]['quantity'] = $request->quantity[$i];
                $details[$i]['total_amount'] = $request->total_amount[$i];

            }

            $sell->sell_product()->createMany($details);

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


    public function details($id){


        $invoice_details = Invoice::findOrFail($id)->sell_product;
        $invoice = Invoice::findOrFail($id);

        return view('invoices.details',compact('invoice_details','invoice'));
    }


}