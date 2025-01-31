<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'programs';
    protected $fillable = [
        'title', 
        'description',
        'image'
    ];
    //


    public function products()
    {
        return $this->hasMany(Product::class, 'program_id');
    }
}
