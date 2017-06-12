<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
/*$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});*/

$factory->define(App\Product::class, function (Faker\Generator $faker) {

    return [
        'title' => str_random(7),
        'imagepath' => 'http://img12.nnm.me/2/4/b/b/0/26b6437fff5d254040902099186.jpg',
        'description' => $faker->paragraph(5),
        'price' => $faker->numberBetween(10, 18),
    ];
});
