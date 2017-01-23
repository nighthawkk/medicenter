<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class doctor extends Authenticatable
{
    protected $fillable = [
        'first_name','last_name','phone','mobile', 'email','street','city','state','pincode','username', 'password','clinic_name','clinic_address','time_slot','speciality','fee','reg_number',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $guard = "docs";
}
