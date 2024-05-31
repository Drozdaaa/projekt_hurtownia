<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name','surname','position','email','phone_number','salary'];

    public function orders(): HasMany
    {
        return $this->hasMany(order::class);
    }
}
