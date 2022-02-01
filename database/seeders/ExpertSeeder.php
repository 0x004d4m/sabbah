<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpertSeeder extends Seeder
{
    public function run()
    {
        DB::table('experts')->insert([
            ['id' => 1,'image' => "storage/uploads/team/86dfa19f65f2ddb86aa99235b2ab8ac6.png",'name' => "Jason Brody",'position' => "CEO Founder",'media1' => "asdfasdfasdf",'media2' => "asdfasdfasdf",'media3' => "asdfasdfasdf",'media4' => "asdfasdfasdf",'created_at' => "2022-02-01 00:00:00",'updated_at' => "2022-02-01 00:00:00"],
            ['id' => 2,'image' => "storage/uploads/team/8975bdd391fb1232f73564d7b2f5206b.png",'name' => "Myra Johns",'position' => "web designer",'media1' => "asdfasdfasdf",'media2' => "asdfasdfasdf",'media3' => "asdfasdfasdf",'media4' => "asdfasdfasdf",'created_at' => "2022-02-01 00:00:00",'updated_at' => "2022-02-01 00:00:00"],
            ['id' => 3,'image' => "storage/uploads/team/e201b7baf13a86522a5d6f1ddfc339a2.png",'name' => "Mike Smith",'position' => "web designer",'media1' => "asdfasdfasdf",'media2' => "asdfasdfasdf",'media3' => "asdfasdfasdf",'media4' => "asdfasdfasdf",'created_at' => "2022-02-01 00:00:00",'updated_at' => "2022-02-01 00:00:00"]
        ]);
    }
}
