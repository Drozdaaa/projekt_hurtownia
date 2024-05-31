<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['order_id','order_date','delivery_date','quantity','shop_id','employee_id'];
    public function employee(): BelongsTo{
        return $this->belongsTo(Employee::class);
    }
    public function shop(): BelongsTo{
        return $this->belongsTo(Shop::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
