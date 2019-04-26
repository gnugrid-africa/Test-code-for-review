<?php

use App\Models\Settings\Sacco;
use App\Models\Settings\LoanProduct;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(LoanProduct::class, function(Faker\Generator $faker)
{

    $sacco               = Sacco::inRandomOrder()->first();

    return [
        'sacco_id'          => $sacco->id,
        'interest_method'   => $faker->randomElement(LoanProduct::INTEREST_METHODS),
        'interest_rate'     => $faker->randomFloat(4, 0, 1),
        'interest_type'     => $faker->randomElement(LoanProduct::INTEREST_TYPES),
        'minimum_loan_guarantor_savings_percentage' => $faker->randomFloat(4, 1, 20),
        'minimum_loan_savings_percentage'           => $faker->randomFloat(4, 5, 35),
        'minimum_shares_for_loans'                  => $faker->numberBetween(0, 20),
        'name'                                      => $faker->randomElement([
                                                            'Short term',
                                                            'Medium term',
                                                            'Long term',
                                                            'High interest, easy to get',
                                                            'Medical emergency',
                                                            'School supplies',
                                                            'Motor vehicle'
                                                        ]).' '.$faker->unique()->word,
        'payment_frequency'  => $faker->randomElement(LoanProduct::PAYMENT_FREQUENCIES),
        'penalty_rate'       => $faker->randomFloat(4, 0, 1),
        'grace_period_days'  => $faker->numberBetween(0, 10),
        'product_type'       => 'Standard',
        'charge_interest_during_grace_period'  => $faker->randomElement(['Yes', 'No']),
        'arrears_period_days'                  => $faker->numberBetween(0, 10),

        // mobis 4.1:
        // 'arrears_period'      => $faker->numberBetween(0, 200),
        // 'maximum_loan_period' => $faker->numberBetween(30, 365),
        // 'maximum_loan_amount' => $faker->numberBetween(1000, 100000),
        // 'writeoff_period'     => $faker->numberBetween(1, 100),
    ];
});
