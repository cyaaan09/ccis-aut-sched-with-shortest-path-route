<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        	[
        		'id' => 1,
        		'name' => 'john rosales',
                'email' => 'johnrosales@gmail.com',
                'password' => 'password'
        	],

        	[
        		'id' => 2,
        		'name' => 'jaymar bajala',
                'email' => 'jaymarbajala@gmail.com',
                'password' => 'password'
        	],

        	[
        		'id' => 3,
        		'name' => 'christian',
                'email' => 'cyan@gmail.com',
                'password' => 'password'
        	]

        ]);
    }
}
