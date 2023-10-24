<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $description
 * @property integer $enable
 * @property string $created_at
 * @property string $updated_at
 * @property Product[] $products
 */
class Category extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['description', 'enable', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Models\Product', 'idcategory');
    }
}
