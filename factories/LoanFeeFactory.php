<?php

use App\Models\Loans\LoanFee;
use App\Models\Settings\User;
use App\Models\Settings\Sacco;
use App\Models\Settings\LoanProduct;
use App\Models\Settings\ChartOfAccounts\GeneralLedgerAccount;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(LoanFee::class, function(Faker\Generator $faker) {

    $sacco        = Sacco::first();
    $loan_product = $sacco->loan_products()->inRandomOrder()->first();

    $account_charged_type = $faker->randomElement(LoanFee::GLA_ACCOUNT_TYPES);
    $gla = GeneralLedgerAccount::
                        randomAccountWithoutFeesOnLoanProduct($account_charged_type, $loan_product);

    $fee_type = $faker->randomElement(LoanFee::FEE_TYPES);

    $max = $faker->randomFloat(4, 10000, 1000000);
    $min = $faker->randomFloat(4, 0, $max);

    return [
        'destination_general_ledger_account_id' => $gla->id,
        'loan_product_id'                       => $loan_product->id,
        'account_charged_type'                  => $account_charged_type,
        'charge_with_interest'                  => $faker->boolean(),
        'fee_type'                              => $fee_type,
        'flat_fee_amount'                       => $fee_type === LoanFee::FLAT_FEE_TYPE ? $faker->numberBetween(4, 500, 10000) : null,
        'fee_percentage'                        => $fee_type === LoanFee::PERCENTAGE_FEE_TYPE ? $faker->randomFloat(4, 0.5, 5) : null,
        'maximum_applicable_loan_amount'        => $max,
        'minimum_applicable_loan_amount'        => $min,
    ];
});
