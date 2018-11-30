<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use Searchable;
    protected $guarded= [];

    public function searchableAs()
    {
        return 'posts_index';
    }
}
