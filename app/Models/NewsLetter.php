<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsLetter extends Model
{
    use HasFactory;
    protected $table = 'news_letters';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'ip_address',
        'mac_address',
        'device',
        'status',
    ];
}
