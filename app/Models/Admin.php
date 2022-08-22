<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $guard = 'admin';

    protected $fillable = [
        'name',
        'email',
        'username',
        'phone',
        'role_id',
        'photo',
        'email_token',
        'password'
    ];

    protected $hidden = [
        'password',
    ];

}
