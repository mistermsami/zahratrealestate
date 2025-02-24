<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyFeature extends Model
{
    use HasFactory;

    protected $fillable = [
        'air_conditioning',
        'swimming_pool',
        'central_heating',
        'gym',
        'window_covering',
        'car_parking'
    ];

    // public function listing()
    // {
    //     return $this->belongsTo(ListingDetail::class);
    // }
}
