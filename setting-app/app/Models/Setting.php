<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo_kodein',
        'logo_yayasan',
        'whatsapp',
        'email',
        'address_1',
        'address_2',
        'facebook_link',
        'twitter_link',
        'instagram_link',
        'youtube_link',
    ];
}
