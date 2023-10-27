<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            //Admin
            [
                'name' => 'Admin',
                'userName' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'status' => 'active',

            ],
            //Vendor
            [
                'name' => 'Vendor',
                'userName' => 'vendor',
                'email' => 'vendor@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'vendor',
                'status' => 'active',

            ],
            //User or Customer
            [
                'name' => 'User',
                'userName' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'user',
                'status' => 'active',

            ],
        ]);
    }
}
