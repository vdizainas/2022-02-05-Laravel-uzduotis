<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function ProductProductCategory() {
        return $this->belongsTo(ProductCategory::class, 'category_id', 'id'); 
    }
}
