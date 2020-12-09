<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
           ['id'=>1,'name'=>'Nguyen Van A','email'=>'nguyenvana@gmail.com','address'=>'Hanoi','phone'=>'0123456789','total'=>200000,'state'=>1],
           ['id'=>2,'name'=>'Nguyen Van B','email'=>'nguyenvanb@gmail.com','address'=>'ThaiBinh','phone'=>'0987654321','total'=>300000,'state'=>0],

        ]);
    }
}
