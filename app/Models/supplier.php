<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    public $timestamps = false;
    protected $fillable = ['name','address','phone_number','email','description'];
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
