<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
                'name' => 'admin',
                'email' => Str::random(10) . '@gmail.com',
                'email_verified_at' => now(),
                'password' => 'admin', // password
                'remember_token' => Str::random(10),
            ]);

            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'email_verified_at' => now(),
                'password' => 'admin', // password
                'remember_token' => Str::random(10),
            ]);

    }
}
