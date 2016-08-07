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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'country_id' => rand(1,10),
    ];
});

$factory->define(App\Slogan::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word(),
        'description' => $faker->sentence,
        'text' => $faker->text(300),
        'icon' => 'icon-user',
        'selected' => false,
    ];
});

$factory->define(App\Message::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'website' => $faker->country,
        'message' => $faker->text(100)
    ];
});

$factory->define(App\Country::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->country,
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'user_id' => rand(1, 10),
        'title' => $faker->word(),
        'body' => $faker->text(100),
    ];
});
