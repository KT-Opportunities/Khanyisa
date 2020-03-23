<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Database\Eloquent\Model;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        User::create([
            'name' => 'Dawn Chikoki',
            'email' => 'dawnchikoki@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => str_random(10),
        ]);
    }
}
