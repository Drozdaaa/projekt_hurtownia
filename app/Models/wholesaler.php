<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wholesaler extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['supplier_id'];
    public function supplier(): BelongsTo{
        return $this->belongsTo(Supplier::class);
    }
}
