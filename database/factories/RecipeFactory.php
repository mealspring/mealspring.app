<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Recipe;
use Faker\Generator as Faker;

$factory->define(Recipe::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class)->create(),
        'name' => $faker->sentence(),
        'description' => $faker->paragraph(),
        'blurb' => $faker->sentence()
    ];
});
