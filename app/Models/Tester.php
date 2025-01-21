<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tester extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone_number',
    ];
    protected $hidden =['userId'];
}
