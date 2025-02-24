<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slug extends Model
{
    use HasFactory;

    protected $fillable = [
        'listing_id',
        'slug'
    ];

    public function listing()
    {
        return $this->belongsTo(ListingDetail::class, 'listing_id');
    }
}
