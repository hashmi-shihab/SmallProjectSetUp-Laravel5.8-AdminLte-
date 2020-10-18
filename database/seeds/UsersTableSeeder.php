<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

    	DB::table('users')->insert([
    		'name'     => 'Admin',
    		'email'    => 'admin@gmail.com',
    		'password' => Hash::make('secret'),
    	]);
    }
}
