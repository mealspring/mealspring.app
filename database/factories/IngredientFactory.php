<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ingredient;
use Faker\Generator as Faker;

$factory->define(Ingredient::class, function (Faker $faker) {
    return [
        'recipe_id' => factory(App\Recipe::class)->create(),
        'name' => $faker->sentence(),
        'quantity' => $faker->randomFloat(2, 1.2, 5.8),
        'unit' => $faker->randomElement(['Cup(s)','Gram(s)','Kilogram(s)', 'Liter(s)', 'Pound(s)', 'Milliliter(s)', 'Ounce(s)', 'Pint(s)'])
    ];
});
