<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'name',
        'type',
        'description',
        'price',
        'slug',
        'quantity'
    ];

    protected $hidden = [];

    public function galeleries()
    {
        return $this->husMany(ProductGallery::class, 'products_id');
    }
}
