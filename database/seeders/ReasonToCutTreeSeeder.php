<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReasonToCutTreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reasons = [
            'To a common developmental need',
            "Because it's dangerous",
            'To build the house intended to be built',
            'Due to a decision of the court or arbitration panel',
            'Due to death due to natural causes',
            'Because it does not bear fruit',
            'Because the Electricity Board has asked to cut it off',
        ];

        foreach ($reasons as $reason) {
            DB::table('reason_to_cut_trees')->insert([
                'reason' => $reason,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
