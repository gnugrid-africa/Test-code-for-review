<?php

use App\Models\Settings\Sacco;
use App\Models\Customers\Institution;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Institution::class, function (Faker\Generator $faker) {
    $sacco = Sacco::inRandomOrder()->first();
    $branch = $sacco->branches()
                    ->withoutGlobalScopes()
                    ->inRandomOrder()->first();
    $random_phone = '+256'.$faker->randomNumber("7");

    return [
        'sacco_id' => $sacco->id,
        'branch_id'=> $branch->id,
        'name'     => $faker->company,
        'legacy_address' => $faker->address,
        'street_address' => $faker->streetAddress,
        'postcode' => $faker->postcode,
        'city'     => $faker->city,
        'district' => $faker->streetName,
        'country'        => $faker->randomElement(['Uganda']),
        'telephone_num'  => $random_phone,
        'email'          => $faker->unique()->companyEmail,
        'web_address'    => $faker->domainName,
        'has_newsletters'=> 1,
        'legacy_member_num' => $branch->legacy_branch_prefix .'-'.random_int(1, 80000),
        'registration_date' => $faker->dateTimeBetween(SEEDING_SACCO_START, 'now'),
        'incorporated_at'=> $faker->dateTimeBetween('1970-01-01', '2017-04-05')
                                  ->format(MYSQL_DATE_FORMAT),
        'logo_path'   => $faker->randomElement([
            '/img/faker-institution-logos/Aviato-front.png',
            '/img/faker-institution-logos/gu.png',
            '/img/faker-institution-logos/hooli-1.jpg',
            '/img/faker-institution-logos/kyu.png',
            '/img/faker-institution-logos/muk.jpg',
            '/img/faker-institution-logos/nucleus.jpg',
            '/img/faker-institution-logos/piedpiper.jpg',
            '/img/faker-institution-logos/e-corp.png',
            '/img/faker-institution-logos/fsociety.jpg',
        ]),
    ];
});
