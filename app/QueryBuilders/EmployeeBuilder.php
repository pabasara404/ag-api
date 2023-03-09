<?php

namespace App\QueryBuilders;

use App\Models\Employee;

class EmployeeBuilder
{
    static function whereId(int $id) :Employee
    {
        return Employee::find($id);
    }
}
