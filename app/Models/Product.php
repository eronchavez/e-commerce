<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }
}
