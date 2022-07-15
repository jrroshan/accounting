<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'address',
        'phone',
        'email',
        'logo',
        'background_banner',
        'goole_map',
        'favicon',
        'opening_hour',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
    ];
}
