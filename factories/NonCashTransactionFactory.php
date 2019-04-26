<?php

use App\Models\Transactions\GLA\NonCashTransaction;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(NonCashTransaction::class, function (Faker\Generator $faker) {

    return [
        'amount' => $faker->numberBetween(100,500)*100,
        'description' => $faker->randomElement([null, 'testing', 'and again']),
        'transaction_date' => $faker->dateTimeBetween('2010-01-01', '2017-07-05')
                                      ->format('Y-m-d'),
    ];
});
