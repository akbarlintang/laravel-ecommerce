<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function presentPrice()
    {
        return '$' . number_format(($this->price) / 100);
    }

    public function scopeMightLike($query)
    {
        return $query->inRandomOrder()->take(4);
    }
}