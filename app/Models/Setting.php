<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

    protected $fillable = [
        'address',
        'phone_number',
        'email',
        'schedule',
        'weekend_schedule',
        'instagram',
        'facebook',
        'messenger',
        'viber',
        'whatsapp'
    ];

}