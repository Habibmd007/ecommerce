<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\OrderSubmited;

class Order extends Model
{
    protected $dispatchesEvents = [
        'created' => OrderSubmited::class,
    ];

}
