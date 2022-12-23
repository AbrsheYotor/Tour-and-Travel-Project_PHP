<?php

use Faker\Generator as Faker;



$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$oy$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQghvhgAhrhfB77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
