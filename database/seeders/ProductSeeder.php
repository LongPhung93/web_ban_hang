<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['sku'=>'SP001','name'=>'Quan kaki do man','slug'=>'Quan-kaki-do-man','price'=>'200.000','featured'=>1,'state'=>1,'img'=>'quan-kaki-do-man-qk162-8273.jpg','category_id'=>3],
            ['sku'=>'SP002','name'=>'So mi ngan tay ca ro xanh bien','slug'=>'So-mi-ngan-tay-ca-ro-xanh-bien','price'=>'300.000','featured'=>1,'state'=>1,'img'=>'so-mi-ngan-tay-ca-ro-xanh-bien-asm1214-10087.jpg','category_id'=>2],
            ['sku'=>'SP003','name'=>'Ao nu phoi vien','slug'=>'ao-nu-phoi-vien','price'=>'250.000','featured'=>1,'state'=>1,'img'=>'ao-nu-phoi-vien.jpg','category_id'=>6],
            ['sku'=>'SP004','name'=>'Ao khoac nam','slug'=>'ao-khoac','price'=>'200.000','featured'=>1,'state'=>1,'img'=>'ao-khoac.jpg','category_id'=>2],
        ]);
    }
}
