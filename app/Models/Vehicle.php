<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'model_id',
        'category_id',
        'brand_id',
        'year',
        'rental_rate',
        'availability',
        'mileage',
        'doors',
        'seats',
    ];

    public function model()
    {
        return $this->belongsTo(Type::class, 'model_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
