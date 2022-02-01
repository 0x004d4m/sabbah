<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SponserSeeder extends Seeder
{
    public function run()
    {
        DB::table('sponsers')->insert([
            ["id"=>"1","image"=>"storage\/uploads\/sponser\/54ba3ee25a65d2bf8970d7dd53166df9.png","created_at"=>"2022-01-31 23:23:16","updated_at"=>"2022-02-01 08:05:43"],
            ["id"=>"2","image"=>"storage\/uploads\/sponser\/61847b03f1cf362f179ec108985a854d.png","created_at"=>"2022-01-31 23:23:19","updated_at"=>"2022-02-01 08:05:50"],
            ["id"=>"3","image"=>"storage\/uploads\/sponser\/31cfce6ccfa07f3935107e1a0c6a2c83.png","created_at"=>"2022-01-31 23:23:22","updated_at"=>"2022-02-01 08:05:57"]
        ]);
    }
}
