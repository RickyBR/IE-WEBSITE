<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModule extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'class_modules';
    protected $fillable = [
        'class_id',
        'title',
        'content'
    ];

    public function product() 
    {
        return $this->belongsTo(Product::class, 'class_id');
    }
}
