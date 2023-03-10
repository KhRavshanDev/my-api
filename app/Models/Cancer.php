<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cancer extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'slug',
        'number_of_cases',
        'number_of_deaths'
    ];
}
