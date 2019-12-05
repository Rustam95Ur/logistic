<?php

namespace App\Models;

use App\Models\Product;

class Category extends \TCG\Voyager\Models\Category
{
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

}