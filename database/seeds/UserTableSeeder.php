<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'first_name'     => 'predrag',
            'last_name' => 'milosavljevic',
            'email'    => 'predrag.m@vivifyideas.com',
            'password' => Hash::make('pedja123'),
        ));
    }

}