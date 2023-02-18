<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Letter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(EmployeeSeeder $employeeSeeder)
    {
        $employeeSeeder->run();
        $letters = Letter::factory(10)->create();

        Employee::all()->each(function(Employee $employee)use($letters){
            $employee->letters()->attach($letters);
        });
    }
}
