<?php

use App\Models\Transactions\GLA\Expense;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Expense::class, function (Faker\Generator $faker) {

    return [
        'payment_method' => $faker->randomElement(Expense::PAYMENT_METHODS),
        'amount' => $faker->numberBetween(10,500)*100,
        'voucher_number' => null,
        'cheque_number' => null,
        'description' => null,
        'transaction_date' => $faker->dateTime($max = 'now'),
    ];
});
