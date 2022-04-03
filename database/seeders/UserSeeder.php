<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'unique_id' => 'asdfghjkpoiuytrsdfghjmnb',
            'name' => 'Admin Manager',
            'email' => 'admin@gmail.com',
            'phone_number' => '0139832580',
            'role' => 'admin',
            'gender' => 'male',
            'password' => Hash::make('password'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'unique_id' => 'jua7phBAnvTgEiWeDiLZzxGp',
            'name' => 'Ugo Raphael',
            'email' => 'ugo@gmail.com',
            'phone_number' => '0129832789',
            'gender' => 'male',
            'password' => Hash::make('password'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'unique_id' => 'zxcvbnmpoiuytrmnbvc',
            'name' => 'Akon G',
            'email' => 'akon@gmail.com',
            'phone_number' => '01229832769',
            'gender' => 'male',
            'password' => Hash::make('password'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
