<?php

use App\Models\Settings\Sacco;
use App\Models\Loans\Loan;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Loan::class, function(Faker\Generator $faker) {

    $sacco = Sacco::first();

    
    

    return [
        'sacco_id'                => $sacco->id,
        'branch_id'               => $sacco->branches()->inRandomOrder()->first()->id,
        'creating_user_id'        => $sacco->users()->inRandomOrder()->first()->id,
        'customer_id'             => $sacco->customer_details()->inRandomOrder()->first()->id,
        'loan_product_id'         => $sacco->loan_products()->inRandomOrder()->first()->id,
        'application_date'        => $faker->dateTimeBetween('-1 years', 'now')->format(MYSQL_DATE_FORMAT),
        'primary_income_source'   => $faker->randomElement([
                                        'Salary',
                                        'Gifts and Inheritances',
                                        'Investment Interest',
                                        'Dividends from shares',
                                        'Deferred compensation and retirement savings account',
                                        'Rental Income',
                                      ]),
        'purpose'                 => $faker->randomElement([
                                        'Buy seedlings for farm',
                                        'Pay for school fees',
                                        'Buy a boda boda for business',
                                        'Expand my business',
                                        'Housing loan',
                                        'Buy a plot of land',
                                        'Hospital bills',
                                        'Start a retail business',
                                        'Pay for tuition',
                                    ]),
        'repayment_period_months' => $faker->numberBetween(1, 18),
        'requested_amount'        => $faker->randomFloat(100 * 1000, 1000 * 1000),
        'status'                  => $faker->randomElement(Loan::LOAN_STATUSES),
        'repayment_period_months' => $faker->numberBetween(4, 12)
    ];
});
