<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\kehadiran_user;
use Faker\Generator as Faker;

$factory->define(kehadiran_user::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 33, $max = 47),
        'role' => 'Guru',
        'kehadiran_id' => $faker->numberBetween($min = 0, $max = 5),
        'created_at' => now()
    ];
});
