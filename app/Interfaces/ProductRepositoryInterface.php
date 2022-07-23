<?php

namespace App\Interfaces;

use App\Http\Requests\StoreProductRequest;

interface ProductRepositoryInterface{

    public function index();
    public function create();
    public function store(StoreProductRequest $request);
    public function edit($id);
    public function update(StoreProductRequest $request,$id);
    public function delete($id);

}