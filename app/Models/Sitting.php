<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sitting extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'company_logo',
        'facebook_url',
        'instagram_url',
        'tiktok_url',
        'linkedin_url',
        'youtube_url',
    ];
}
