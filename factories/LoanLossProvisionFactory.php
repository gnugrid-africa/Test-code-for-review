<?php

use App\Models\Settings\Sacco;
use App\Models\Settings\LoanLossProvision;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(LoanLossProvision::class, function (Faker\Generator $faker) {
    $range_min = $faker->numberBetween(1, 180);
    return [
        'sacco_id' => Sacco::inRandomOrder()->first()->id, 
        'range_min' => $range_min,
        'range_max' => $range_min+30,
        'percentage_loss' => $faker->randomFloat(4, 10, 90),
    ];
});