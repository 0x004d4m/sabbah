<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    public function run()
    {
        DB::table('features')->insert([
            ["id"=>"1","title"=>"UI\/UX Design","body"=>"The European languages are members of the same family separate existence.","icon"=>"fa-microchip","created_at"=>"2022-01-31 22:51:55","updated_at"=>"2022-01-31 22:51:55"],
            ["id"=>"2","title"=>"Branding","body"=>"The European languages are members of the same family separate existence.","icon"=>"fa-newspaper","created_at"=>"2022-01-31 22:52:26","updated_at"=>"2022-01-31 22:52:26"],
            ["id"=>"3","title"=>"Easy To Use","body"=>"The European languages are members of the same family separate existence.","icon"=>"fa-gamepad","created_at"=>"2022-01-31 22:52:56","updated_at"=>"2022-01-31 23:04:39"],
            ["id"=>"4","title"=>"Pre-Planning","body"=>"The European languages are members of the same family separate existence.","icon"=>"fa-brain","created_at"=>"2022-01-31 22:55:22","updated_at"=>"2022-01-31 23:02:49"],
            ["id"=>"5","title"=>"User Friendly","body"=>"The European languages are members of the same family separate existence.","icon"=>"fa-user-tie","created_at"=>"2022-01-31 22:56:20","updated_at"=>"2022-01-31 23:04:14"],
            ["id"=>"6","title"=>"Cloud Service","body"=>"The European languages are members of the same family separate existence.","icon"=>"fa-cloud","created_at"=>"2022-01-31 22:56:39","updated_at"=>"2022-01-31 22:56:39"]
        ]);
    }
}
