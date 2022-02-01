<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    public function run()
    {
        DB::table('videos')->insert([
            ['id' => 1,'thumb' => "storage/uploads/thumb/b504e072ab14b33d6580c3fa20ae3bc7.png",'video_link' => "https://www.youtube.com/watch?v=rMkklC5KK9M",'created_at' => "2022-02-01 00:00:00",'updated_at' => "2022-02-01 00:00:00"]
        ]);
    }
}
