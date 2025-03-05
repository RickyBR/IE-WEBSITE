<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory,HasUuids;
    protected $table = 'classes';
    protected $fillable = [
        'program_id',
        'title', 
        'price',
        'description',
        'image'
    ];

    protected $casts = [
        'description' => 'array'
    ];
    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }

    public function modules()
    {
        return $this->hasMany(ClassModule::class, 'class_id');
    }

}
