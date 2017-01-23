<?php

namespace App;



use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Pub extends BaseModel implements AuthenticatableContract, CanResetPasswordContract
{

    protected $fillable = [
        'first_name','last_name','phone','mobile', 'email','street','city','state','pincode','username', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $guard = "pubs";
    protected static $rules = array(
        'username'              => 'required|min:4',
        'password'              => 'required|min:8',
    );

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getReminderEmail()
    {
        return $this->email;
    }


}

