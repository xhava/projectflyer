<?php


$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name'           => $faker->name,
        'email'          => $faker->email,
        'password'       => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Flyer::class, function (Faker\Generator $faker) {
    return [
        'street'      => $faker->streetAddress,
        'city'        => $faker->city,
        'zip'         => $faker->numberBetween(10000, 99999),
        'state'       => $faker->state,
        'country'     => $faker->country,
        'price'       => $faker->numberBetween(10000, 5000000),
        'description' => 'okoko'

    ];
});
