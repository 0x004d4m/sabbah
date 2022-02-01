<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainSeeder extends Seeder
{
    public function run()
    {
        DB::table('mains')->insert([
            ["id"=>"1","title"=>"Make Business Easy With Beam.","title_small"=>"Donec quam felis, ultricies nec, pellentesque eu, pretium quis sem.","button_text"=>"Download Now","button_link"=>"#","image"=>"storage\/uploads\/screenshot\/27f3ff3305fe047625ba8ae1b7fd9c61.png","features_icon1"=>"fa-layer-group","features_title1"=>"Creative Design","features_description1"=>"Unlike team chat apps, Beam is designed to help your team stay focused by keeping relevant and actionable.","features_icon2"=>"fa-swatchbook","features_title2"=>"Fully Responsive","features_description2"=>"Unlike team chat apps, Beam is designed to help your team stay focused by keeping relevant and actionable.","features_icon3"=>"fa-comment-dots","features_title3"=>"Unlimited Support","features_description3"=>"Unlike team chat apps, Beam is designed to help your team stay focused by keeping relevant and actionable.","created_at"=>"2022-01-31 22:24:45","updated_at"=>"2022-02-01 08:02:01"]
        ]);
    }
}
