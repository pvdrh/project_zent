<?php

use Illuminate\Database\Seeder;

class UserinfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_info')->truncate();
        for($i=1; $i<21; $i++){

            DB::table('user_info')->insert([
                [
                    'user_id' => '1',
                    'fullname' => 'Duy',
                    'address' => 'aaaaaaa'
                ]
            ]);
        }
    }
}
