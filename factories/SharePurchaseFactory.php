<?php

use App\Models\Settings\Sacco;
use App\Models\Transactions\Shares\SharePurchase;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(SharePurchase::class, function (Faker\Generator $faker) {
    return [
        'source_customer_id' => null,
    ];
});
