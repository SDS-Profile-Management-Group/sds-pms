<?php

namespace Database\Seeders\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AIRoboMajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('module_belongs_to')->insert([
            [
                'module_id' => 'ZA-2201', 
                'major_id' => 'ZA', 
                'module_type' => 'MC',
                'is_required_in_other_majors' => true,
                'other_required_majors' => json_encode(['ZI'])
            ],

            [
                'module_id' => 'ZA-2202', 
                'major_id' => 'ZA', 
                'module_type' => 'MC',
                'is_required_in_other_majors' => false,
                'other_required_majors' => json_encode([])
            ],

            [
                'module_id' => 'ZA-2203', 
                'major_id' => 'ZA', 
                'module_type' => 'MC',
                'is_required_in_other_majors' => false,
                'other_required_majors' => json_encode([])
            ],

            [
                'module_id' => 'ZA-2204', 
                'major_id' => 'ZA', 
                'module_type' => 'MC',
                'is_required_in_other_majors' => false,
                'other_required_majors' => json_encode([])
            ],

            [
                'module_id' => 'ZA-3201', 
                'major_id' => 'ZA', 
                'module_type' => 'MC',
                'is_required_in_other_majors' => true,
                'other_required_majors' => json_encode(['ZI'])
            ],

            [
                'module_id' => 'ZA-3202', 
                'major_id' => 'ZA', 
                'module_type' => 'MC',
                'is_required_in_other_majors' => true,
                'other_required_majors' => json_encode(['ZD', 'ZI'])
            ],

            [
                'module_id' => 'ZA-4290', 
                'major_id' => 'ZA', 
                'module_type' => 'MC',
                'is_required_in_other_majors' => false,
                'other_required_majors' => json_encode([])
            ],
        ]);
    }
}
