<?php

use App\Models\Settings\Sacco;
use App\Models\Settings\Branch;
use App\Models\Customers\Group;
use App\Models\Customers\Individual;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Group::class, function (Faker\Generator $faker) {

    $sacco = Sacco::inRandomOrder()->first();
    $branch_id = $sacco->branches()->inRandomOrder()->first()->id;
    return [
        'name' => $faker->company,
        'group_type'=>$faker->randomElement(['Grameen','Village Banking']),
        'sacco_id' => $sacco->id,
        'branch_id' => $branch_id
    ];
});
