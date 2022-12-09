<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'admin',
                'email' => 'admin@gmail.io',
                'role' => 'administrator',
                'isactive' => 'yes',
                // 'email_verified_at' => Carbon::now(),
                'password' => Hash::make('admin123'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
    }
}