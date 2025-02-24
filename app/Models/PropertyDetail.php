<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'size',
        'rooms',
        'baths',
        'garage',
        'garage_size',
        'built_year'
    ];

    public function listing()
    {
        return $this->hasMany(ListingDetail::class);
    }
}
