<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'position-id',  
        'name',
        'gender',
        'birthdate',
        'NIK',
        'phone',
        'address',
        'city',
        'province',
        'country',
        'email',
        'password',
        'education',
        'photo',
        'skills',
        'sosmedia',
        'note01',
        'note02',
        'note03',
    ];
}
