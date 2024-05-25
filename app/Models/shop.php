<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shop extends Model
{
    public $timestamps = false;
    protected $fillable = ['name','address','phone_number','email','industry'];
    public function offers(): HasMany
    {
        return $this->hasMany(order::class);
    }
}
