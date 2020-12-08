<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        for($i=1; $i<21; $i++){
            DB::table('products')->insert([
                [
                    'name' => 'Ghế Ăn',
                    'slug' => 'ghe-an',
                    'origin_price' => '100000',
                    'sale_price' => '10000',
                    'discount_price' => '10',
                    'content' => 'Đây là bộ bàn ghé dành cho bốn người',
                    'user_id' => '2',
                    'category_id' => '1',
                    'status' => '1',
                    'model' =>'G001'
                ]
            ]);
        }
        }
        
}
