<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            [
                "id" => "1",
                "user_name" => "admin",
                "email" => "pigaiteala20dw@ikzubirimanteo.com",
                "password" => Hash::make("root"),
                "birth_date" => "2021-12-26",
                "user_type" => "admin"
            ],
            [
                "id" => "2",
                "user_name" => "usuario1",
                "email" => "pil.donosti34@gmail.com",
                "password" => Hash::make("root"),
                "birth_date" => "2001-10-10",
                "user_type" => "user"
            ]
        ]);
    }
}
