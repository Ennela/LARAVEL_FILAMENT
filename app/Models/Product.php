<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = '23810310138_products';
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
