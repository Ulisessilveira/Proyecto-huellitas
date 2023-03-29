<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=>'Pantalon Roto',
            'price'=>250,
            'img'=>'default.jpg',
            'condition'=>'used',
            'description'=>'Pantalones de la marca hollister usado 2 veces',
            'ship'=>true,
            'stock'=>8,
            'size'=>'5',
            'status'=>'disponible',
            'slug'=>'pantalon-roto',
            'id_category'=>1,
            'id_user'=>1,
        ]);
        DB::table('products')->insert([
            'name'=>'Gorra de Beis',
            'price'=>150,
            'img'=>'default.jpg',
            'condition'=>'used',
            'description'=>'Gorra del equipo Boston',
            'ship'=>false,
            'stock'=>20,
            'size'=>'unitalla',
            'status'=>'disponible',
            'slug'=>'gorra-de-beis',
            'id_category'=>4,
            'id_user'=>2,
        ]);
    }
}
