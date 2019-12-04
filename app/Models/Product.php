<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use App\Models\Category;

class Product extends Model
{
    use Translatable;

    protected $translatable = ['title', 'body', 'feature'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

}
