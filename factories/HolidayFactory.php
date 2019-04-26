<?php

use App\Models\Settings\Sacco;
use App\Models\Settings\Holiday;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Holiday::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->company,
        'sacco_id' => Sacco::inRandomOrder()->first()->id, 
        'date' => $faker->dateTimeBetween('+1 day','+ 5 years'),  
    ];
});