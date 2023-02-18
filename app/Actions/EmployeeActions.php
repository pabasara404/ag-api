<?php

namespace App\Actions;

use App\Models\Employee;
use Illuminate\Support\Collection;

class EmployeeActions
{
    public static function all(): Collection
    {
        return Employee::query()->all();
    }
}
