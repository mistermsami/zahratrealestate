<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'office_contact',
        'phone_contact',
        'email',
        'description',
        'agentprofile'
    ];

    public function listings()
    {
        return $this->hasMany(ListingDetail::class);
    }
}
