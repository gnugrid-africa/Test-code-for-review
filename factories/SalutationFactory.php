<?php

use App\Models\Settings\Sacco;
use App\Models\Settings\Salutation;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Salutation::class, function (Faker\Generator $faker) {
    
    $sacco = Sacco::inRandomOrder()->first();
    /**
     * TODO FO, low prio
     *     Can we get a random title that's NOT in the list of
     *     default titles, and also not blank? 
     *
     *      Since the title is required to be unique, the faker
     *      is struggling hard.
     */
    return [
        'sacco_id' => $sacco->id,
        'name' => $faker->name
    ];
});
