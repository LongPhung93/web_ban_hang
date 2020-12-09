<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['id'=>1,'name'=>'Nam','slug'=>'nam','parent'=>0],
            ['id'=>2,'name'=>'Ao Nam','slug'=>'ao-nam','parent'=>1],
            ['id'=>3,'name'=>'Quan Nam','slug'=>'quan-nam','parent'=>1],
            ['id'=>5,'name'=>'Nu','slug'=>'nu','parent'=>0],
            ['id'=>6,'name'=>'Ao Nu','slug'=>'ao-nu','parent'=>5],
            ['id'=>7,'name'=>'Quan Nu','slug'=>'quan-nu','parent'=>5]
        ]);
    }
}
