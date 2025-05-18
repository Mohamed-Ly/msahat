<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sitting_contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'phone',
        'address',
    ];
}
