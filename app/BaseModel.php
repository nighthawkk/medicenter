<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class BaseModel extends Authenticatable
{


    public static function validate($inputs)
    {
        return \Validator::make($inputs, static::$rules);
    }



}
