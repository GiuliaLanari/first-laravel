<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      for($i=0 ; $i < 100; $i++){
        DB::table("activity")->insert([
            "title"=> fake()->words(rand(3,10), true),
            "price"=>rand(15,100),
            "productor"=>fake()->name(),
            "img"=>fake()->imageUrl(640, 480)



        ]);
      }

    }
}