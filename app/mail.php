<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mail extends Model
{
    protected $fillable = [
        'username' ,
        'email' ,
        'description' ,
        'text'
    ];

}
