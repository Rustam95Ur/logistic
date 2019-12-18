<?php

namespace App\Models;

use TCG\Voyager\Traits\Translatable;

class Category extends \TCG\Voyager\Models\Category
{
    use Translatable;

    protected $translatable = ['name'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

}
