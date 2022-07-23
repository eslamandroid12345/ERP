<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Interfaces\ClientRepositoryInterface;

class ClientController extends Controller
{


    public $clientRepositoryInterface;

    public function __construct(ClientRepositoryInterface $clientRepositoryInterface){

        $this->clientRepositoryInterface = $clientRepositoryInterface;
    }



    public function index(){

        return $this->clientRepositoryInterface->index();

    }

    public function create(){

        return $this->clientRepositoryInterface->create();
    }
    public function store(StoreClientRequest $request){


        return $this->clientRepositoryInterface->store($request);

    }
    public function edit($id){

        return $this->clientRepositoryInterface->edit($id);

    }
    public function update(StoreClientRequest $request,$id){

        return $this->clientRepositoryInterface->update($request,$id);

    }
    public function delete($id){

        return $this->clientRepositoryInterface->delete($id);



    }
}
