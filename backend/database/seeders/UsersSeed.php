<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Ulises silveira',
            'email'=>'ulises_silveira@gmail.com',
            'password'=>Hash::make('123'),
            'phone'=>'636-132-3309',
            'img'=>'img_users_1.jpg',
            'address'=>'mi casita'
        ]);
        DB::table('users')->insert([
            'name'=>'Saul Rodrigez',
            'email'=>'saul_rodrigez@gmail.com',
            'password'=>Hash::make('123'),
            'phone'=>'636-104-8730',
            'img'=>'img_users_2.jpeg',
            'address'=>'casita de saul'
        ]);
    }
}
