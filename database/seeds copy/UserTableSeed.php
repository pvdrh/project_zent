<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class UserTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'phone' => '0835904783',
                'address' => 'asdfghjkl',
                'role' => '1',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'admin1',
                'email' => 'admin1@gmail.com',
                'phone' => '0835944783',
                'address' => 'asdfghjkl2',
                'role' => '1',
                'password' => bcrypt('12345'),
            ]


        ]);
    }
}
