<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Interfaces\ProductRepositoryInterface;

class ProductController extends Controller
{
    public $productRepositoryInterface;

    public function __construct(ProductRepositoryInterface $productRepositoryInterface){

        $this->productRepositoryInterface = $productRepositoryInterface;
    }


    public function index(){

        return $this->productRepositoryInterface->index();

    }

    public function create(){


        return $this->productRepositoryInterface->create();
    }


    public function store(StoreProductRequest $request){


        return $this->productRepositoryInterface->store($request);

    }
    public function edit($id){

        return $this->productRepositoryInterface->edit($id);

    }
    public function update(StoreProductRequest $request,$id){

        return $this->productRepositoryInterface->update($request,$id);

    }
    public function delete($id){

        return $this->productRepositoryInterface->delete($id);


    }
}
