<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(EmployeeSeeder $employeeSeeder)
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Test User',
             'password' => Hash::make('1234'),
             'email' => 'test@example.com',
         ]);
        $employeeSeeder->run();
        $this->call(RoleSeeder::class);
        $this->call(GnDivisionSeeder::class);
    }

}
