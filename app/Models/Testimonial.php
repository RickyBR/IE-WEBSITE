<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    //
    use HasFactory,HasUuids;
    protected $table = 'testimonials';
    protected $fillable = [
        'name', 
        'description', 
        'image'
    ];

    public $incrementing = false; // Pastikan UUID tidak auto-increment
    protected $keyType = 'string';
}
