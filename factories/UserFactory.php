<?php

use App\Models\Settings\User;
use App\Models\Settings\Sacco;
use App\Models\Settings\Branch;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(User::class, function (Faker\Generator $faker) {

    $sacco = Sacco::inRandomOrder()->first();
    $branch = $sacco->branches()
                    ->withoutGlobalScopes()
                    ->inRandomOrder()->first();
    $bcrypt_password = bcrypt('secret');

    return [
        'sacco_id' => $sacco->id,
        'branch_id' => $branch->id,
        'name' => $faker->unique()->name,
        'username' => $faker->unique()->username,
        'email' => $faker->unique()->safeEmail,
        'password' => $bcrypt_password,
        'password_confirmation' => $bcrypt_password,
        'remember_token' => str_random(10),
    ];
});
