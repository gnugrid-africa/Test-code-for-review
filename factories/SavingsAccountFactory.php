<?php

use App\Models\Settings\Branch;
use App\Models\Settings\SavingsProduct;
use App\Models\Customers\SavingsAccount;
use App\Models\Customers\CustomerDetail;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(SavingsAccount::class, function (Faker\Generator $faker) {

	$customer_details = CustomerDetail::inRandomOrder()->first();
  
    $imported_balance = $faker->numberBetween(20*1000, 1*1000*1000);

    return [
        'sacco_id' => $customer_details->customer->sacco_id,
        'customer_id' => $customer_details->customer->id,
        'branch_id' => $customer_details->customer->branch_id,
        'savings_product_id' => $customer_details->sacco
                                                 ->savings_products()
                                                 ->inRandomOrder()
                                                 ->first()->id,
        'account_name'       => $faker->randomElement([null, $faker->name]),
        'balance'            => $imported_balance,
        'imported_balance'   => $imported_balance,
        'opened_at'          => $faker->dateTimeBetween('-3 years', '-2 years')
                                      ->format(MYSQL_DATE_FORMAT),
        'last_transacted_at' => $faker->dateTimeBetween(SEEDING_SACCO_START, '2017-07-05')
                                      ->format(MYSQL_DATE_FORMAT),
        'is_dormant'         => 0,
    ];
});
