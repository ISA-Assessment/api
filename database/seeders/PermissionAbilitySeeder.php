<?php

namespace Database\Seeders;

use App\Models\PermissionAbility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionAbilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $abilities = array(
            array('ability' => 'create'),
            array('ability' => 'read'),
            array('ability' => 'update'),
            array('ability' => 'delete'),
        );

        foreach ($abilities as $ability) {
            //
            PermissionAbility::create($ability);
        }
    }
}
