<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasMany;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'price', 'quantity', 'supplier_id', 'product_type_id', 'shop_id'];



    public function supplier(): BelongsTo{
        return $this->belongsTo(Supplier::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function type(): BelongsTo
    {
        return $this->belongsTo(ProductType::class, 'product_type_id');
    }
    public function cartItems()
    {
        return $this->hasMany(Cart::class);
    }
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
