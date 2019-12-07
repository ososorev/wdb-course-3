<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $fillable =['name','email','password'];
    function __construct(array $attributes = [])
    {
        print_r($attributes);
        parent::__construct($attributes);


    }
}
