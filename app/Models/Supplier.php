<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name',
        'contact_email',
        'contact_phone',
    ];


    public function entry()
    {
        return $this->hasMany(Entry::class);
    }
}
