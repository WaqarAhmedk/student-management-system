<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterStudent extends Model
{
    protected $fillable=[
        'fname',
        'lname',
        'cnic',
        'semester',
        'email',

    ];
}
