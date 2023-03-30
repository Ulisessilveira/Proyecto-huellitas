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
            'name'=>'Bocadillos para perro',
            'price'=>52,
            'img'=>'default.jpg',
            'condition'=>'new',
            'description'=>'Bocadillos con empaque reutilizable y resellable, 100% natural y sin conservadores',
            'ship'=>true,
            'stock'=>100,
            'size'=>'grande',
            'status'=>'disponible',
            'slug'=>'bocadillos-para-perro',
            'id_category'=>1,
            'id_user'=>1,
        ]);
        DB::table('products')->insert([
            'name'=>'Pelota para perros',
            'price'=>20,
            'img'=>'pelota.jpg',
            'condition'=>'new',
            'description'=>'Pelota color azul para tu perrito',
            'ship'=>false,
            'stock'=>0,
            'size'=>'unitalla',
            'status'=>'disponible',
            'slug'=>'pelota-para-perro',
            'id_category'=>2,
            'id_user'=>2,
        ]);
    }
}
