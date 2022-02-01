<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            ExpertSeeder::class,
            FeatureSeeder::class,
            MainSeeder::class,
            PlanSeeder::class,
            ScreenshotSeeder::class,
            SectionSeeder::class,
            ServiceSeeder::class,
            SponserSeeder::class,
            TeamSeeder::class,
            UserSeeder::class,
            PermissionSeeder::class,
            VideoSeeder::class,
        ]);
    }
}
