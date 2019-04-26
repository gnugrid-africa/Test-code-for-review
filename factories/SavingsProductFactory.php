<?php

use App\Models\Settings\Sacco;
use App\Models\Settings\SavingsProduct;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(SavingsProduct::class, function (Faker\Generator $faker) {
    return [
        'sacco_id'                  => Sacco::inRandomOrder()->first()->id,
        'type'                      => 'standard',
        'name'                      => $faker->randomElement([
                                            'Youth Savings',
                                            'Senior Savings',
                                            'Low Transaction Costs',
                                            'Long Term Hold',
                                            'No Fees',
                                            'High Fees',
                                            'Scroogey McDuckface Style',
                                            'Very high fees',
                                            ]).' '.$faker->unique()->word,
        'opening_balance'           => $faker->numberBetween(1, 10)*1000,
        'minimum_balance'           => $faker->numberBetween(1, 10)*1000,
        'interest_rate'             => $faker->randomFloat(4, 2, 10),
        'interest_frequency_days'   => $faker->numberBetween(1, 12)*30,
        'interest_method'           => $faker->randomElement(SavingsProduct::INTEREST_METHODS),
        'deposit_fee'               => $faker->numberBetween(1, 10)*100,
        'withdrawal_fee'            => $faker->numberBetween(1, 10)*100,
        'monthly_charge'            => $faker->numberBetween(1, 10)*100,
    ];
});
