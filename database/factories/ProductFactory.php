<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
	$name = $faker->words(3, true);
    $categories = \App\Category::all()->pluck('id')->toArray();
    return [
    	'name' => $name,
        'slug' => Str::slug($name, '-'),
        'img' => 'https://loremflickr.com/320/240',
        'price' => $faker->numberBetween($min = 10, $max = 12000),
        'description' => $faker->text(200),
        'recommended' => $faker->boolean(0),
        'category_id' => $faker->shuffle($categories)[0],
        // 'category_id' => function() {
        //     return factory(App\User::class)->create()->id;
        // }
       
    ];
});
