<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' =>'Putria Febriana',
            'email' =>'putriafebriana@gmail.com',
            'password'=>Hash::make('password123'),
            'remember_token'=>str_random(10)
        ]);
    }
}
