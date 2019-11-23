<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Comment extends Model
{
    use Translatable;

    protected $translatable = ['full_name', 'text'];

}
