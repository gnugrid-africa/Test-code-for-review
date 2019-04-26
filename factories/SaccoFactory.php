<?php

use App\Models\Settings\Sacco;
use App\Models\Settings\Branch;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Sacco::class, function (Faker\Generator $faker) {


    return [
        'name'                     => $faker->company,
        'website_url'              => $faker->url,
        'is_subscribed_newsletter' => 1,
        'incorporated_at'          => $faker->date,
        'certificate_path'         => $faker->url,
        'certificate_number'       => str_random(),
        'general_manager_name'     => $faker->name,
        'general_manager_phone'    => $faker->e164PhoneNumber,
        'is_activated'             => 1,
        'logo_path'                => $faker->url,
        'is_configured'            => $faker->boolean(50)
    ];
});

