<?php

namespace App\Repositories;

use App\Http\Requests\StoreClientRequest;
use App\Interfaces\ClientRepositoryInterface;
use App\Models\Client;

class ClientRepository implements ClientRepositoryInterface
{

    public function index(){

        $clients = Client::simplePaginate(3);

        return view('clients.index',compact('clients'));
    }

    public function create()
    {
        // TODO: Implement create() method.

        return view('clients.create');
    }


    public function store(StoreClientRequest $request)
    {
        try {

            $client = new Client();
            $client->name = $request->name;
            $client->email = $request->email;
            $client->address = $request->address;
            $client->save();

            return redirect()->route('clients.index')->with('success','client created successfully');

        }catch (\Exception $exception){

            return redirect()->back()->withErrors(['error' => $exception->getMessage()]);
        }
    }


    public function edit($id){

        $client = Client::findOrFail($id);

        return view('clients.edit',compact('client'));
    }

    public function update(StoreClientRequest $request, $id){

        try {

            $client = Client::findOrFail($id);
            $client->name = $request->name;
            $client->email = $request->email;
            $client->address = $request->address;
            $client->save();

            return redirect()->route('clients.index')->with('update','client updated successfully');

        }catch (\Exception $exception){

            return redirect()->back()->withErrors(['error' => $exception->getMessage()]);
        }
    }

    public function delete($id){

        try {

            $client = Client::findOrFail($id);

            $client->delete();
            return redirect()->route('clients.index')->with('delete','client deleted successfully');

        }catch (\Exception $exception){

            return redirect()->back()->withErrors(['error' => $exception->getMessage()]);
        }
    }
}