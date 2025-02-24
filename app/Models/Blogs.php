<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blogs extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image_path1',
        'description1',
        'qoute1',
        'description11',
        'image_path2',
        'description2',
        'qoute2',
        'description22',
        'image_path3',
        'description3',
        'qoute3',
        'description33',
    ];
}
