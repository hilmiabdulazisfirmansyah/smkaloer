<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
    	'name' => Str::random(10),
    	'password' => 'rahasia',
    	'role' => 'siswa',
    	'email' => Str::random(10).'@gmail.com',
    	'remember_token' => Str::random(60),
    ]);
    }
}
