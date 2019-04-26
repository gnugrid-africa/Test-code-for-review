<?php

use App\Models\Settings\Branch;
use App\Models\Transactions\UnclearedEffects\Receivable;
use App\Models\Transactions\UnclearedEffects\UnclearedEffects;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Receivable::class, function(Faker\Generator $faker)
{
    $branch              = Branch::inRandomOrder()->first();
    $rendered_at = $faker->dateTimeBetween('-1 years', 'now')
                         ->format('Y-m-d');
    $due_at  = addRandomDays($rendered_at, 150, 300);
    $receipt_number = substr(str_shuffle('ABCDEFGHKLMNOPQRSTUVWXYZ0123456789'), 0, 8);    

    $attributes = [
        'status'    => UnclearedEffects::PENDING_STATUS,
        'receipt_number' => null,
    ];
    
    return $attributes + [
        'sacco_id'          => $branch->sacco_id,
        'branch_id'         => $branch->id,
        'due_at'            => $due_at,
        'recipient'         => $faker->randomElement([
            $faker->name, $faker->name, $faker->name,
            $faker->name, $faker->name, $faker->name,
            $faker->name.' SACCO',
            'Government of Uganda',
            'Stocks & Bonds'
        ]),
        'rendered_at' => $rendered_at,
        'name'        => $faker->randomElement([
            'Loans lent out',
            'Interest on investments',
            'Training for other SACCOs',
            'Equipment rentals',
            'Tax credits',
        ]),
        'details' => $faker->randomElement([ 
            '', 
            implode('', $faker->sentences(2))
        ]),
        'receipt_number' => $faker->randomElement(['', $receipt_number]),
    ];
});