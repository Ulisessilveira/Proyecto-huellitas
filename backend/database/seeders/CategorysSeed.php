<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorysSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorys')->insert(['name'=>'Food']);
        DB::table('categorys')->insert(['name'=>'Toys']);
        DB::table('categorys')->insert(['name'=>'Houses']);
        DB::table('categorys')->insert(['name'=>'Clothes']);
        DB::table('categorys')->insert(['name'=>'Dog collar']);
    }
}
