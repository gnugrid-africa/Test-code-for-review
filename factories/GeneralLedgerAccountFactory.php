<?php

use App\Models\Settings\ChartOfAccounts\GeneralLedgerAccount;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(GeneralLedgerAccount::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->company
    ];
});
