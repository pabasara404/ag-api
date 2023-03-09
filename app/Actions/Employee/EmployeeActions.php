<?php

namespace App\Actions\Employee;

use App\Models\Employee;
use App\QueryBuilders\EmployeeBuilder;
use Illuminate\Support\Collection;

class EmployeeActions
{
    public static function all(): Collection
    {
        return Employee::query()->all();
    }

    public static function update(array $employee): bool
    {
        return EmployeeBuilder::whereId($employee['id'])
            ->update([
                'name' => $employee['name'],
                'address' => $employee['address'],
                'contact_number' => $employee['contact_number'],
                'date_of_birth' => $employee['date_of_birth'],
            ]);
    }


}
