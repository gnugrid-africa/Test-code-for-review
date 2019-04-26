<?php

use App\Models\Transactions\GLA\Investment;

$factory->define(Investment::class, function (Faker\Generator $faker) {
    $units_purchased = $faker->numberBetween(2, 10);
    return [
        'units_purchased' => $units_purchased,
		'units_remaining' => $units_purchased,
		'unit_purchase_price' => $faker->numberBetween(100, 500),
		'description' => $faker->paragraph(2, 5)
	];
});
