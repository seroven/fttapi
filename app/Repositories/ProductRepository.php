<?php

namespace App\Repositories;

use App\Interfaces\ProductRepositoryInterface;
use App\Models\Product;

class ProductRepository extends EssentialRepository implements ProductRepositoryInterface
{

  protected $model;

  public function __construct(Product $model)
  {
    $this->model = $model;
  }
}
