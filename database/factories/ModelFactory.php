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

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'is_admin' => false,
        'password' => str_random(10),
        'remember_token' => str_random(10),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
