<?php

namespace App\Http\Controllers;

use App\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $repository;

    
    public function __construct(ProductRepositoryInterface $repository) {
        $this->repository = $repository;
    }

    function get(){
        return $this->repository->all(['*'], ['category']);
    }
    function getById($id){
        return $this->repository->findById($id, ['*'], ['category']);
    }
    function create(Request $request){
        return $this->repository->create($request->all());

    }
    function update(Request $request, $id){
        return $this->repository->update($id, $request->all());

    }
    function delete($id){
        return $this->repository->update($id, ["enable" => 0]);
    }

}
