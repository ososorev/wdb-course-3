<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class users extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $fillable =['name','email','password'];
    function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
}
