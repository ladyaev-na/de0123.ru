<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    public $timestamps = false;
    protected $fillable = ['product_type_id', 'name', 'director', 'email','tell','address','inn','raiting'];

    public function partnerType()
    {
        return $this->belongsTo(PartnerType::class);
    }
}
