<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('likes')->insert([
            'id_user'=>'1',
            'id_product'=>'1'
        ]);
        DB::table('likes')->insert([
            'id_user'=>'1',
            'id_product'=>'2'
        ]);
    }
}
