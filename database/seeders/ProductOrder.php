<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductOrder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_orders')->insert([
           ['sku'=>'SP001','name'=>'Quan kaki do man','price'=>200000,'quantity'=>1,'img'=>'quan-kaki-do-man-qk162-8273.jpg','order_id'=>1],
           ['sku'=>'SP001','name'=>'So mi ngan tay ca ro xanh bien','price'=>300000,'quantity'=>1,'img'=>'so-mi-ngan-tay-ca-ro-xanh-bien-asm1214-10087.jpg','order_id'=>2]
        ]);
    }
}
