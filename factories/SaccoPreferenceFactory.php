<?php

use App\Models\Settings\SaccoPreference;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(SaccoPreference::class, function(Faker\Generator $faker)
{
    return [
        'currency_code'            => $faker->randomElement(['UGX', 'UGX', 'USD', 'ZMK']),
        'financial_year_end_month' => $faker->numberBetween(1, 12),
        'financial_year_end_day'   => $faker->numberBetween(1, 28),
        'maximum_share_percentage' => $faker->randomFloat(4, 0, 1),
        'share_value'              => $faker->numberBetween(1, 10) * 1000,
        'withholding_tax_rate'     => $faker->randomFloat(4, 2, 10),
    ];
});
