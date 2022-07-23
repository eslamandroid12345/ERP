<?php

namespace App\Interfaces;

use App\Http\Requests\StoreClientRequest;

interface ClientRepositoryInterface
{


    public function index();
    public function create();
    public function store(StoreClientRequest $request);
    public function edit($id);
    public function update(StoreClientRequest $request,$id);
    public function delete($id);

}