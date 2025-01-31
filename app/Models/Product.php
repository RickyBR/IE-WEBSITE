<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory,HasUuids;
    protected $table = 'products';
    protected $fillable = [
        'program_id',
        'title', 
        'category',
        'price',
        'image'
    ];

    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }
}
