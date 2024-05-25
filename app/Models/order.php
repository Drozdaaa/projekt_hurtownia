<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['order_date','delivery_date','quantity','engine','machine_id'];
    public function employee(): BelongsTo{
        return $this->belongsTo(Employee::class);
    }
    public function shop(): BelongsTo{
        return $this->belongsTo(Shop::class);
    }
    public function products(): BelongsToMany{
        return $this->belongsToMany(Product::class);
    }
}
