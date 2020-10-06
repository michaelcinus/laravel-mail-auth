<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\mail;
use Faker\Generator as Faker;

$factory->define(mail::class, function (Faker $faker) {
    return [
        
        'username'    => $faker ->  word(),
        'email'       => $faker ->  email(),
        'description' => $faker ->  text($maxNbChars = 5),
        'text'        => $faker ->  text($maxNbChars = 100)

    ];
});
