<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->delete();
        $data = [
            [
                'product_name' => 'iPhone 14',
                'product_type' => 1,
                'price' => 49000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'product_name' => 'Samsung A14',
                'product_type' => 1,
                'price' => 59000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],  
            
        ];
        
        DB::table('products')->insert($data);
    }
}
