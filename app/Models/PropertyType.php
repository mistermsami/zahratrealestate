<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    use HasFactory;

    protected $fillable = [
        'pt_name'
    ];

    public function listings()
    {
        return $this->hasMany(ListingDetail::class);
    }
}
