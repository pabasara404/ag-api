<?php

namespace App\Actions\TimberCuttingPermitApplication;

use App\Models\Boundaries;
use App\Models\Citizen;
use App\Models\DeedDetail;
use App\Models\Employee;
use App\Models\GnDivision;
use App\Models\LandDetail;
use App\Models\TimberCuttingPermitApplication;
use App\Models\TreeCuttingReason;
use App\Models\TreeDetail;
use App\Models\User;
use App\QueryBuilders\EmployeeBuilder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class TimberCuttingPermitApplicationAction
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

    public static function store(array $timberCuttingPermitApplication, User $authUser = null)
    {
        DB::beginTransaction();
        try {
            $gnDivision = GnDivision::create($timberCuttingPermitApplication['grama_niladari_division']);
            $treeDetails = TreeDetail::create($timberCuttingPermitApplication['tree_details']);
            $deedDetails = DeedDetail::create($timberCuttingPermitApplication['deed_details']);
            $landDetails = LandDetail::create($timberCuttingPermitApplication['land_details']);
            $boundaries = Boundaries::create($timberCuttingPermitApplication['$boundaries']);
            $treeCuttingReasons = TreeCuttingReason::create($timberCuttingPermitApplication['tree_cutting_reasons']);

        }catch (){

        }
    }


}
