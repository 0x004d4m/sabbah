<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    public function run()
    {
        DB::table('plans')->insert([
            ["id"=>"1","title"=>"Basic","price"=>"0","period"=>"Free","description"=>"Wordpress Theme\r\n50GB Disk Space\r\n50 Email Accounts\r\nHigh Speed Internet\r\nFree Theme Installation","button_text"=>"Sign Up","button_link"=>"#","created_at"=>"2022-01-31 23:08:05","updated_at"=>"2022-01-31 23:08:05"],
            ["id"=>"2","title"=>"Pro","price"=>"10","period"=>"Per Month","description"=>"Wordpress Theme\r\n50GB Disk Space\r\n50 Email Accounts\r\nHigh Speed Internet\r\nFree Theme Installation","button_text"=>"Sign Up","button_link"=>"#","created_at"=>"2022-01-31 23:08:27","updated_at"=>"2022-01-31 23:08:27"],
            ["id"=>"3","title"=>"Ultimate Plan","price"=>"50","period"=>"Per Year","description"=>"Wordpress Theme\r\n50GB Disk Space\r\n50 Email Accounts\r\nHigh Speed Internet\r\nFree Theme Installation","button_text"=>"Sign Up","button_link"=>"#","created_at"=>"2022-01-31 23:08:51","updated_at"=>"2022-01-31 23:08:51"]
        ]);
    }
}
