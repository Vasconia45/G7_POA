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
        DB::table("categories")->insert([
            [
                "id" => "1",
                "category" => "trips"
            ]
        ]);
        DB::table("categories")->insert([
            [
                "id" => "2",
                "category" => "food"
            ]
        ]);
        DB::table("categories")->insert([
            [
                "id" => "3",
                "category" => "cars"
            ]
        ]);
        DB::table("categories")->insert([
            [
                "id" => "4",
                "category" => "people"
            ]
        ]);
        DB::table("categories")->insert([
            [
                "id" => "5",
                "category" => "videogames"
            ]
        ]);
    }
}
