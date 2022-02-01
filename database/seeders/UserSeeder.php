<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert(['id' => 1,'name' => "admin",'email' => "admin@app.com",'password' => Hash::make('admin1234'),'created_at' => "2022-02-28 00:00:00",'updated_at' => "2022-02-28 00:00:00"]);
    }
}
