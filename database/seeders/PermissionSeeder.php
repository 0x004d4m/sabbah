<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        DB::table('permissions')->insert([
            ["id"=>"1","name"=>"Manage Main","guard_name"=>"web","created_at"=>"2022-01-31 21:29:32","updated_at"=>"2022-01-31 21:29:32"],
            ["id"=>"2","name"=>"Manage Section","guard_name"=>"web","created_at"=>"2022-01-31 21:29:45","updated_at"=>"2022-01-31 21:29:45"],
            ["id"=>"3","name"=>"Manage Feature","guard_name"=>"web","created_at"=>"2022-01-31 21:29:56","updated_at"=>"2022-01-31 21:29:56"],
            ["id"=>"4","name"=>"Manage Service","guard_name"=>"web","created_at"=>"2022-01-31 21:30:03","updated_at"=>"2022-01-31 21:30:03"],
            ["id"=>"5","name"=>"Manage Plan","guard_name"=>"web","created_at"=>"2022-01-31 21:30:06","updated_at"=>"2022-01-31 21:30:06"],
            ["id"=>"6","name"=>"Manage Screenshot","guard_name"=>"web","created_at"=>"2022-01-31 21:30:13","updated_at"=>"2022-01-31 21:30:13"],
            ["id"=>"7","name"=>"Manage Sponser","guard_name"=>"web","created_at"=>"2022-01-31 21:30:21","updated_at"=>"2022-01-31 21:30:21"],
            ["id"=>"8","name"=>"Manage Expert","guard_name"=>"web","created_at"=>"2022-01-31 21:30:25","updated_at"=>"2022-01-31 21:30:25"],
            ["id"=>"9","name"=>"Manage Team","guard_name"=>"web","created_at"=>"2022-01-31 21:30:28","updated_at"=>"2022-01-31 21:30:28"],
            ["id"=>"10","name"=>"Manage Video","guard_name"=>"web","created_at"=>"2022-01-31 21:30:39","updated_at"=>"2022-01-31 21:30:39"],
            ["id"=>"11","name"=>"Manage Auth","guard_name"=>"web","created_at"=>"2022-01-31 21:30:47","updated_at"=>"2022-01-31 21:30:47"],
        ]);

        DB::table('roles')->insert([
            ["id"=>"1","name"=>"Super Admin","guard_name"=>"web","created_at"=>"2022-01-31 21:31:11","updated_at"=>"2022-01-31 21:31:11"],
        ]);

        DB::table('model_has_roles')->insert([
            ["role_id"=>"1","model_type"=>"App\Models\User","model_id"=>"1"],
        ]);

        DB::table('role_has_permissions')->insert([
            ["permission_id"=>"1","role_id"=>"1"],
            ["permission_id"=>"2","role_id"=>"1"],
            ["permission_id"=>"3","role_id"=>"1"],
            ["permission_id"=>"4","role_id"=>"1"],
            ["permission_id"=>"5","role_id"=>"1"],
            ["permission_id"=>"6","role_id"=>"1"],
            ["permission_id"=>"7","role_id"=>"1"],
            ["permission_id"=>"8","role_id"=>"1"],
            ["permission_id"=>"9","role_id"=>"1"],
            ["permission_id"=>"10","role_id"=>"1"],
            ["permission_id"=>"11","role_id"=>"1"]
        ]);
    }
}
