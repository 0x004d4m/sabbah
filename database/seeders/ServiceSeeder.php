<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        DB::table('services')->insert([
            ["id"=>"1","title"=>"Powerful services for Powerful applications.","body"=>"Responsive code that makes your landing page look good on all devices (desktops, tablets, and phones). Created with mobile specialists.\r\n\r\n Responsive code.\r\n Look good on all devices.\r\n Created with mobile specialists.","image"=>"storage\/uploads\/service\/50ef0550aa7c59d0d85946c8e141d51e.png","created_at"=>"2022-01-31 22:39:53","updated_at"=>"2022-02-01 08:04:47"],
            ["id"=>"2","title"=>"Easily balance workloads and manage resources.","body"=>"Responsive code that makes your landing page look good on all devices (desktops, tablets, and phones). Created with mobile specialists.\r\n\r\nPlan ahead by day, week, or month, and see project status at a glance","image"=>"storage\/uploads\/service\/d751ad77f3235d5019659444e1f79bdc.png","created_at"=>"2022-01-31 22:45:45","updated_at"=>"2022-02-01 08:04:35"]
        ]);
    }
}
