<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'instructors';
    protected $fillable = [
        'name', 
        'institution', 
        'experience', 
        'social_media', 
        'image'
    ];
}
