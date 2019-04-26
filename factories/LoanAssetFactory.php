<?php

use App\Models\Loans\LoanAsset;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(LoanAsset::class, function(Faker\Generator $faker) {
    return [
        // 'loan_id' => ''
        'type'     => $faker->words(4, true),
        'location' => $faker->city . ' ' . $faker->state . ' ' . $faker->country,
        'value'    => $faker->randomFloat(4, 100 * 1000, 2 * 1000 * 1000),
    ];
});
