<?php

use App\Models\Transactions\GLA\OtherIncome;

$factory->define(OtherIncome::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->randomElement($array = [
            'Books',
            'Print Loan Ledger',
            'Insurance Fee',
            'Sale of goods'
        ]),
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'receipt_number' => 'DT'.$faker->numberBetween(0, 100),
        'amount' => $faker->numberBetween(1, 10)*1000,
        'transaction_date' => $faker->dateTimeBetween($startDate = '-3 years', $endDate = 'now')
    ];
});
