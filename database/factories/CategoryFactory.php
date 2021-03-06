<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
      'name' => $faker->sentence,
      'photo' => $faker->image('public/images',400,300, null, false),
    ];
});
