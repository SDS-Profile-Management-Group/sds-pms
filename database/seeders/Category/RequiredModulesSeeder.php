<?php

namespace Database\Seeders\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RequiredModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('module_belongs_to')->insert([
            [
                'module_id' => 'LE-1503', 
                'major_id' => 'XX', 
                'module_type' => 'CB',
                'shared_among_majors' => true,
                'all_participating_majors' => json_encode(['ZA', 'ZC', 'ZD', 'ZI', 'ZS'])
            ],

            [
                'module_id' => 'LE-2503', 
                'major_id' => 'XX', 
                'module_type' => 'CB',
                'shared_among_majors' => true,
                'all_participating_majors' => json_encode(['ZA', 'ZC', 'ZD', 'ZI', 'ZS'])
            ],

            [
                'module_id' => 'PB-1501', 
                'major_id' => 'XX', 
                'module_type' => 'CB',
                'shared_among_majors' => true,
                'all_participating_majors' => json_encode(['ZA', 'ZC', 'ZD', 'ZI', 'ZS'])
            ],

            [
                'module_id' => 'PB-1502', 
                'major_id' => 'XX', 
                'module_type' => 'CB',
                'shared_among_majors' => true,
                'all_participating_majors' => json_encode(['ZA', 'ZC', 'ZD', 'ZI', 'ZS'])
            ],

            [
                'module_id' => 'MS-1501', 
                'major_id' => 'XX', 
                'module_type' => 'CB',
                'shared_among_majors' => true,
                'all_participating_majors' => json_encode(['ZA', 'ZC', 'ZD', 'ZI', 'ZS'])
            ],
        ]);

        DB::table('module_belongs_to')->insert([
            [
                'module_id' => 'ZZ-1102', 
                'major_id' => 'ZZ', 
                'module_type' => 'DC',
                'shared_among_majors' => true,
                'all_participating_majors' => json_encode(['ZA', 'ZC', 'ZD', 'ZI', 'ZS'])
            ],

            [
                'module_id' => 'ZZ-1103', 
                'major_id' => 'ZZ', 
                'module_type' => 'DC',
                'shared_among_majors' => true,
                'all_participating_majors' => json_encode(['ZA', 'ZC', 'ZD', 'ZI', 'ZS'])
            ],

            [
                'module_id' => 'ZZ-1104', 
                'major_id' => 'ZZ', 
                'module_type' => 'DC',
                'shared_among_majors' => true,
                'all_participating_majors' => json_encode(['ZA', 'ZC', 'ZD', 'ZI', 'ZS'])
            ],
        ]);
    }
}
