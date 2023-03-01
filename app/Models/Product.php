<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // protected $table = 'my_products';
    protected $guarded = [];
    public $timestamps = false;
    protected $perPage = 5;

    // protected $primaryKey = 'product_id';
    function category()
    {
        return $this->belongsTo(Category::class);
    }
}
