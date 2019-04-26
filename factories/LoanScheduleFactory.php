<?php

use Carbon\Carbon;
use App\Models\Settings\User;
use App\Models\Loans\Installment;
use App\Models\Loans\Loan;

/**
 * Seed a plain jane loan installment, tweaked by the InstallmentFaker to produce
 * a loan installment item in different states 
 */
$factory->define(Installment::class, function(Faker\Generator $faker) {

    $loan   = Loan::where('status', Loan::DISBURSED_STATUS)
                                         ->inRandomOrder()
                                         ->first();

    $grace_period_days = $loan->loan_product->grace_period_days;

    $due_date               = Carbon::parse($faker->date());

    $principal = rand(100*1000, 999*1000);
    $interest = rand(0, 999);
    
    $beginning_balance =   ($principal * $loan->repayment_period_months)
                         - ($principal * rand(0, $loan->repayment_period_months));
    $remaining_balance = $beginning_balance - $principal;

    return [
            'loan_id'   => $loan->id,
            'due_date'              => $due_date,
            'penalty_last_paid_at'  => null,
            'principal'             => $principal,
            'principal_remaining'   => $principal,
            'interest'              => $interest,
            'interest_remaining'    => $interest,
            'beginning_balance'     => $beginning_balance,
            'remaining_balance'     => $remaining_balance,
    ];
});
