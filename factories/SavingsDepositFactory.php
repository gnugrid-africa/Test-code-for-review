<?php

use App\Models\Transactions\Savings\SavingsDeposit;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(SavingsDeposit::class, function (Faker\Generator $faker) {

    return [
        'amount' => $faker->numberBetween(10,50)*1000,
        'receipt_number' => null,
        'depositor_name' => $faker->randomElement([$faker->name, null, null, null, null]),
        'depositor_phone_number' => null,
    ];
});
