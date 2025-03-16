<?php

namespace Database\Seeders\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MajorCoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Compsci
        DB::table('module_belongs_to')->insert([
            ['module_id' => 'ZC-1201', 'major_id' => 'ZC', 'module_type' => 'MC', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZD', 'ZA', 'ZS'])],
            ['module_id' => 'ZC-1202', 'major_id' => 'ZC', 'module_type' => 'MC', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZC'])],

            ['module_id' => 'ZC-2201', 'major_id' => 'ZC', 'module_type' => 'MC', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZD'])],
            ['module_id' => 'ZC-2202', 'major_id' => 'ZC', 'module_type' => 'MC', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZA', 'ZS', 'ZI'])],
            ['module_id' => 'ZC-2203', 'major_id' => 'ZC', 'module_type' => 'MC', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZD', 'ZS'])],
            ['module_id' => 'ZC-2204', 'major_id' => 'ZC', 'module_type' => 'MC', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZC'])],
            ['module_id' => 'ZC-2205', 'major_id' => 'ZC', 'module_type' => 'MC', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZD', 'ZA', 'ZS', 'ZI'])],

            ['module_id' => 'ZC-3201', 'major_id' => 'ZC', 'module_type' => 'MC', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZC'])],
            ['module_id' => 'ZC-3202', 'major_id' => 'ZC', 'module_type' => 'MC', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZC'])],

            ['module_id' => 'ZC-4202', 'major_id' => 'ZC', 'module_type' => 'MC', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZD', 'ZA', 'ZS', 'ZI'])],
            ['module_id' => 'ZC-4290', 'major_id' => 'ZC', 'module_type' => 'MC', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZC'])],

        ]);

        // AI & Robotics
        DB::table('module_belongs_to')->insert([
            // Duplicate: 4
            ['module_id' => 'ZA-2201', 'major_id' => 'ZA', 'module_type' => 'MC', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZA', 'ZI'])],
            ['module_id' => 'ZA-2202', 'major_id' => 'ZA', 'module_type' => 'MC', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZA'])],
            ['module_id' => 'ZA-2203', 'major_id' => 'ZA', 'module_type' => 'MC', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZA'])],
            ['module_id' => 'ZA-2204', 'major_id' => 'ZA', 'module_type' => 'MC', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZA'])],

            ['module_id' => 'ZA-3201', 'major_id' => 'ZA', 'module_type' => 'MC', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZA', 'ZI'])],
            ['module_id' => 'ZA-3202', 'major_id' => 'ZA', 'module_type' => 'MC', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZA', 'ZD', 'ZI'])],

            ['module_id' => 'ZA-4290', 'major_id' => 'ZA', 'module_type' => 'MC', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZA'])],

        ]);

        // Data Science
        DB::table('module_belongs_to')->insert([
            // Duplicates: 6
            ['module_id' => 'ZD-1201', 'major_id' => 'ZD', 'module_type' => 'MC', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZD'])],

            ['module_id' => 'BB-2207', 'major_id' => 'XX', 'module_type' => 'MC', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZD', 'ZS'])],

            ['module_id' => 'ZD-3201', 'major_id' => 'ZD', 'module_type' => 'MC', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZD'])],

            ['module_id' => 'ZD-4201', 'major_id' => 'ZD', 'module_type' => 'MC', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZD'])],
            ['module_id' => 'ZD-4290', 'major_id' => 'ZD', 'module_type' => 'MC', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZD'])],

        ]);

        // Cybersecurity & Forensics
        DB::table('module_belongs_to')->insert([
            // Duplicate: 6
            ['module_id' => 'ZS-1201', 'major_id' => 'ZS', 'module_type' => 'MC', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZS'])],

            ['module_id' => 'ZS-2201', 'major_id' => 'ZS', 'module_type' => 'MC', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZS'])],
            ['module_id' => 'ZS-2202', 'major_id' => 'ZS', 'module_type' => 'MC', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZS'])],

            ['module_id' => 'ZS-3201', 'major_id' => 'ZS', 'module_type' => 'MC', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZS'])],

            ['module_id' => 'ZS-4290', 'major_id' => 'ZS', 'module_type' => 'MC', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZS'])],
        ]);

        DB::table('module_belongs_to')->insert([
            // Duplicate: 6
            ['module_id' => 'ZI-1201', 'major_id' => 'ZI', 'module_type' => 'MC', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZI'])],
            ['module_id' => 'ZI-1202', 'major_id' => 'ZI', 'module_type' => 'MC', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZI'])],

            ['module_id' => 'ZI-2201', 'major_id' => 'ZI', 'module_type' => 'MC', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZI'])],
            // ['module_id' => 'ZI-2202', 'major_id' => 'ZI', 'module_type' => 'MC', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZI'])], // Need further clarification

            ['module_id' => 'ZI-4290', 'major_id' => 'ZI', 'module_type' => 'MC', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZI'])],
        ]);

    }
}
