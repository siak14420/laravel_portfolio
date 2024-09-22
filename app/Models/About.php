<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'profile', 
        'phone', 
        'image',
        'about',
        'address',
        'twitterId',
        'facebookId',
        'linkedInId',
        'githubId',

    ];
}
