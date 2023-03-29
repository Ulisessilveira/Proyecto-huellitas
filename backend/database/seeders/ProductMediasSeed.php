<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductMediasSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_medias')->insert([
            'file'=>'img1.jpg',
            'id_product'=>'1'
        ]);
        DB::table('product_medias')->insert([
            'file'=>'img2.jpg',
            'id_product'=>'2'
        ]);
    }
}
