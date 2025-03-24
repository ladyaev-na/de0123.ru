<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_type_id','name','article','price'];
    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }
}
