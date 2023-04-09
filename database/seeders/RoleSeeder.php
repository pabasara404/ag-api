<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['role_type' => 1],
            ['role_type' => 2],
            ['role_type' => 3],
            ['role_type' => 4],
            ['role_type' => 5],
            ['role_type' => 6],
            ['role_type' => 7],
            ['role_type' => 8],
            ['role_type' => 9],
            ['role_type' => 10],
        ];

        DB::table('roles')->insert($roles);
    }
}
