<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TNSERT INTO users(name,email,password) VALUES ();
        DB::table('users')->delete();
        $data = [
            [
                'name' => 'Nusreen Mannuy',
                'email' => '622021097@tsu.ac.th',
                'password' => Hash::make('123456'),
                'address' => 'TSU',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],  
            [
                'name' => 'Minda min',
                'email' => '622021098@tsu.ac.th',
                'password' => Hash::make('123456'),
                'address' => 'TSU',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Gun kun',
                'email' => '622021095@tsu.ac.th',
                'password' => Hash::make('123456'),
                'address' => 'TSU',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],   
        ];
        
        DB::table('users')->insert($data);
    }
}
