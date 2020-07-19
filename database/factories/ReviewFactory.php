<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
	$users = \App\Category::all()->pluck('id')->toArray();
	$products = \App\Category::all()->pluck('id')->toArray();
	$startDate = $faker->dateTimeThisYear("-30 days");
    $endDate = $startDate->modify("+1 day");
    return [
        'review' => $faker->text(60),
        'user_id' => $faker->shuffle($users)[0],
        'product_id' => $faker->shuffle($products)[0],
        'created_at' => $startDate,
        'updated_at' => $endDate,
    ];
});

