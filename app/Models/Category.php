<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    function products()
    {
        // products
        // categories
        // category    category_id
        // belongsTo() hasMany()  hasOne()
        return $this->hasMany(Product::class);
    }
}
