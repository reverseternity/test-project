<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joke extends Model
{
    use HasFactory;

    protected $fillable = [
        'joke_genre',
        'joke_coolness',
        'joke',
    ];
}
