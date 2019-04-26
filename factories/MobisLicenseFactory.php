<?php

use Carbon\Carbon;
use App\Models\Ensibuuko\MobisLicense;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(MobisLicense::class, function (Faker\Generator $faker) {
    $number_of_months = $faker->numberBetween(1, 2);
    return [
        'number_of_months'   => $number_of_months,
        'license_token'      => uniqid(MobisLicense::KEY_IDENTIFIER, true),
        'license_start_date' => Carbon::now(),
        'license_expiry_date'=> Carbon::now()->addMonths($number_of_months)->endOfDay(),
    ];
});
