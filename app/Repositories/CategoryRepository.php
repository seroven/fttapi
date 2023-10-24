<?php

namespace App\Repositories;

use App\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;

class CategoryRepository extends EssentialRepository implements CategoryRepositoryInterface
{

  protected $model;

  public function __construct(Category $model)
  {
    $this->model = $model;
  }
}
