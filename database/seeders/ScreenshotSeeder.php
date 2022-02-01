<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScreenshotSeeder extends Seeder
{
    public function run()
    {
        DB::table('screenshots')->insert([
            ["id"=>"1","image"=>"storage\/uploads\/screenshot\/f40170cf37d138f46164a7a6b00da4f4.png","created_at"=>"2022-01-31 22:51:55","updated_at"=>"2022-02-01 08:48:13"],
            ["id"=>"2","image"=>"storage\/uploads\/screenshot\/b9d9928592d01caf3c0246c81ec3f1c6.png","created_at"=>"2022-01-31 22:52:26","updated_at"=>"2022-02-01 08:48:06"],
            ["id"=>"3","image"=>"storage\/uploads\/screenshot\/ed7d6bdc989866fae29915fb53071b77.png","created_at"=>"2022-01-31 22:52:56","updated_at"=>"2022-02-01 08:48:19"],
            ["id"=>"4","image"=>"storage\/uploads\/screenshot\/560b690dc428999aa233912747408be1.png","created_at"=>"2022-02-01 08:48:25","updated_at"=>"2022-02-01 08:48:25"]
        ]);
    }
}
