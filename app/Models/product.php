<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public $timestamps = false;
    protected $fillable = ['name','price','date','quantity'];

    public function supplier(): BelongsTo{
        return $this->belongsTo(Supplier::class);
    }
    public function orders(): BelongsToMany{
        return $this->belongsToMany(Order::class);
    }
}
