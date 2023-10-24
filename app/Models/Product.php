<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $idcategory
 * @property string $description
 * @property float $price
 * @property integer $enable
 * @property string $created_at
 * @property string $updated_at
 * @property Category $category
 */
class Product extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idcategory', 'description', 'price', 'enable', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'idcategory');
    }
}
