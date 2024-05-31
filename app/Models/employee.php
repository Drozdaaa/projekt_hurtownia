<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'position',
        'email',
        'phone_number',
        'salary',
    ];

    // Relacja z zamówieniami
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
