<?php

use Faker\Generator as Faker;

$factory->define(App\Author::class, function (Faker $faker) {
    return [
        'name'  => 'Guilherme',
        'email' => 'guilhermeoliveira.f11@gmail.com' 
    ];
});
