<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $table = 'donations';
    protected $fillable = [
        'payment_type',
        'amount',
        'cover_fee',
        'title',
        'first_name',
        'last_name',
        'email',
        'mobile',
        'on_behalf',
        'country',
        'address1',
        'address2',
        'city',
        'province',
        'postal_code',
        'status',
        'confirmation'
    ];
}
