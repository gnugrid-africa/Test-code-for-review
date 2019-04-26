<?php

use App\Models\Settings\Branch;
use App\Models\Transactions\UnclearedEffects\Payable;
use App\Models\Transactions\UnclearedEffects\UnclearedEffects;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Payable::class, function(Faker\Generator $faker)
{
    $branch              = Branch::inRandomOrder()->first();
    $acquired_at = $faker->dateTimeBetween('-1 years', 'now')
                         ->format('Y-m-d');
    $due_at  = addRandomDays($acquired_at, 150, 300);
    $voucher_number = substr(str_shuffle('ABCDEFGHKLMNOPQRSTUVWXYZ0123456789'), 0, 8);    

    // Could be pending or cleared
    $attributes = [
        'status'            => UnclearedEffects::PENDING_STATUS,
        'voucher_number'    => null,
    ];

    return $attributes + [
        'sacco_id'         => $branch->sacco_id,
        'branch_id'        => $branch->id,
        'due_at'            => $due_at,
        'vendor'           => $faker->randomElement([
            'Sussex insurance', 
            $faker->name, $faker->name, $faker->name,
            'Kampala Electric Company',
            'Masseuses R us'
        ]),
        'acquired_at' => $acquired_at,
        'name'        => $faker->randomElement([
            'Staff massages',
            'Branch insurance',
            'Earthquake insurance',
            'Employee salaries',
            'Water',
            'Electricity',
            'Plumbing'
        ]),
        'details' => $faker->randomElement([ 
            '', 
            implode('', $faker->sentences(2))
        ]),
        
    ];
});