<?php

namespace App\Http\Controllers;

use App\Interfaces\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $repository;

    
    public function __construct(CategoryRepositoryInterface $repository) {
        $this->repository = $repository;
    }

    function get(){
        return $this->repository->all();
    }
    function getById($id){
        return $this->repository->findById($id);
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
