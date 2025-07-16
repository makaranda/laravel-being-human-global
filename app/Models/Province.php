<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $table = 'provinces';
    protected $fillable = [
        'name',
        'slug',
        'order',
        'status',
    ];
       // A province has many districts
    public function districts()
    {
        return $this->hasMany(District::class);
    }
}
