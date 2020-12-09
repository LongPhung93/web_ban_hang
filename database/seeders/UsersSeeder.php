<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           ['name'=>'admin','email'=>'admin@gmail.com','password'=>Hash::make('123456'),'phone'=>'0988325802','address'=>'Hanoi','role_id'=>1],
           ['name'=>'Long','email'=>'long@gmail.com','password'=>Hash::make('123456'),'phone'=>'0392797611','address'=>'Hanoi','role_id'=>1],
           ['name'=>'Nam','email'=>'nam@gmail.com','password'=>Hash::make('123'),'phone'=>'0966625608','address'=>'Haiduong','role_id'=>2]
        ]);
    }
}
