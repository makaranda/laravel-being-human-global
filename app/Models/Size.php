<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $table = 'sizes';
    protected $fillable = [
        'name', 'order', 'status'
    ];
    public function products()
    {
        return $this->hasMany(Product::class, 'size');
    }
}
