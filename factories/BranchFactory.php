<?php

use App\Models\Settings\Sacco;
use App\Models\Settings\Branch;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Branch::class, function (Faker\Generator $faker) {

    return [
        'sacco_id'          => Sacco::inRandomOrder()->first()->id,

        'name'              => $faker->company,
        'email'             => $faker->email,
        'phone_number'      => $faker->e164PhoneNumber,
        'legacy_address'    => $faker->randomElement([null, $faker->address]),
        'street_address'    => $faker->streetAddress,
        'city'              => $faker->city,
        'district'          => $faker->streetName,
        'country'           => $faker->randomElement(['Uganda', 'Zambia', 'Kenya', 'Congo']),
        'postcode'          => $faker->postcode,
        'legacy_branch_prefix'          => $faker->randomElement(['HO', 'BD']),
    ];
});
