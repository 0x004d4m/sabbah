<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    public function run()
    {
        DB::table('sections')->insert([
            ["id"=>"1","name"=>"Features","title"=>"Features designed for you:","text"=>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born.","created_at"=>"2022-02-01 08:51:17","updated_at"=>"2022-02-01 08:51:17"],
            ["id"=>"2","name"=>"Prices","title"=>"Our Plans And Pricing:","text"=>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born.","created_at"=>"2022-02-01 08:51:44","updated_at"=>"2022-02-01 08:51:44"],
            ["id"=>"3","name"=>"Screenshots","title"=>"App Screenshots:","text"=>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born.","created_at"=>"2022-02-01 08:51:55","updated_at"=>"2022-02-01 08:51:55"],
            ["id"=>"4","name"=>"Team","title"=>"Our Team:","text"=>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born.","created_at"=>"2022-02-01 08:52:08","updated_at"=>"2022-02-01 08:52:08"],
            ["id"=>"5","name"=>"Experts","title"=>"Our Experts:","text"=>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born.","created_at"=>"2022-02-01 08:52:23","updated_at"=>"2022-02-01 08:52:23"],
            ["id"=>"6","name"=>"Sponsors","title"=>"We Are Trusted By:","text"=>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born.","created_at"=>"2022-02-01 08:52:48","updated_at"=>"2022-02-01 08:52:48"],
            ["id"=>"7","name"=>"Contact","title"=>"Don't Be Shy Send a Message:","text"=>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born.","created_at"=>"2022-02-01 08:53:09","updated_at"=>"2022-02-01 08:53:09"],
            ["id"=>"8","name"=>"Footer","title"=>"footer","text"=>"© Beam All Right Reserved 2018. Made By Bakhtari Badr","created_at"=>"2022-02-01 08:53:25","updated_at"=>"2022-02-01 08:53:25"]
        ]);
    }
}
