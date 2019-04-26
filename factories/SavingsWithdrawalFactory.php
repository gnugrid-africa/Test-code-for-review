<?php

use App\Models\Settings\Sacco;
use App\Models\Customers\SavingsAccount;
use App\Models\Transactions\Savings\SavingsWithdrawal;

$factory->define(SavingsWithdrawal::class, function (Faker\Generator $faker) {

	$source_savings_account = SavingsAccount::inRandomOrder()->first()->id;	
	$receipt_number = substr(str_shuffle('ABCDEFGHKLMNOPQRSTUVWXYZ0123456789'), 0, 8);	
    return [
    	'amount' 		            => rand(1, 500)*1000,
    	'receipt_number'            => $receipt_number,
		'source_savings_account_id' => $source_savings_account
    ];
});