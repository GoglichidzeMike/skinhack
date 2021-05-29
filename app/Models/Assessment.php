<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'email',
        'imageOne',
        'imageTwo',
        'imageThree',
        'questionTwo',
        'questionThree',
        'questionFour',
        'questionFive',
        'questionSix',
        'questionSeven',
        'questionEight',
        'questionNine',
        'questionTen',
        'questionEleven',
        'questionExtra'
    ];


}
