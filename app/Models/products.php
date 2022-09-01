<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $fillable= [
        'name',
        'description',
        'price',
        'thumbnail_url',
        'quantity',
        'status',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(category::class, 'category_id' , 'id');
    }
}
