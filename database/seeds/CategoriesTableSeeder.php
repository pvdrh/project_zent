<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        for($i=1; $i<21; $i++){
           
            DB::table('categories')->insert([
                [
                    'name' => 'Ghe',
                    'slug' => 'ghe',
                    'parent_id' => '1',
                    'depth' => '2'
                ]
            ]);
        }
    }
}
