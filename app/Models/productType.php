<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    protected $table = 'product_types';

    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function __toString()
    {
        return $this->name;
    }
}
