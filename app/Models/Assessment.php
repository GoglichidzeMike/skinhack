<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'imageOne',
        'imageTwo',
        'imageThree',
        'questionTwo',
        'questionThree',
        'questionFour',
    ];


}
