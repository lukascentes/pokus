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
        User::create([
            'first_name' => 'Lukas',
            'last_name' => 'Centes',
            'user_name' => '176525',
            'password'   =>  Hash::make('9609302222'),
            'email' => 'jssss@gmail.com',
            'remember_token' => str_random(10),
        ]);
    }
}
