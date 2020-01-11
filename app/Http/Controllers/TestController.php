<?php

namespace App\Http\Controllers;

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TestController extends Controller
{

	$factory->define(App\User::class, function (Faker $faker) {
		return [
			'name' => $faker->name,
			'email' => $faker->unique()->safeEmail,
			'role' => 'Siswa',
			'verifEmailStatus' => 1,
        	'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        	'remember_token' => Str::random(10),
    ];
});

}
