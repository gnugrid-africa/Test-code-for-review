<?php

use App\Models\Settings\User;
use App\Models\Loans\Loan;
use App\Models\Loans\Disbursement;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Disbursement::class, function(Faker\Generator $faker) {

    $loan   = Loan::where('status', Loan::APPROVED_STATUS)
                                         ->inRandomOrder()
                                         ->first();
    $user               = $loan->sacco
                                           ->users()
                                           ->inRandomOrder()
                                           ->first();
    $customer           = $loan->customer;
    $disbursement_date  = $loan->application_date->addDays(rand(1, 200));

    return [
        'loan_id'              => $loan->id,
        'branch_id'                        => $user->branch_id,
        'destination_savings_account_id'   => $customer->savings_accounts->first(),
        'disbursed_at'                     => $disbursement_date,
        'disbursement_type'                => $faker->randomElement(Disbursement::DISBURSEMENT_TYPES),
        'cheque_number'                    => $faker->isbn13,
        'receipt_number'                   => $faker->isbn13,
        'voucher_number'                   => $faker->isbn10,
    ];
});
