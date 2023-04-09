<?php

namespace App\Actions\TimberCuttingPermitApplication;

use App\Models\Employee;
use App\Models\TimberCuttingPermitApplication;
use App\QueryBuilders\EmployeeBuilder;
use Illuminate\Support\Collection;

class TimberCuttingPermitApplicationActions
{
    public static function all(): Collection
    {
        return TimberCuttingPermitApplication::query()->all();
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
