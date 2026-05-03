<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'category'
    ];

    public function entry()
    {
        return $this->hasMany(Entry::class);
    }
}
