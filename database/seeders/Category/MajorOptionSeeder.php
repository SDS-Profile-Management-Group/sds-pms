<?php

namespace Database\Seeders\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MajorOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ZC
        DB::table('module_belongs_to')->insert([
            ['module_id' => 'ZC-2301', 'major_id' => 'ZC', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZA', 'ZD', 'ZS', 'ZI'])],

            ['module_id' => 'ZC-3301', 'major_id' => 'ZC', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZA', 'ZD', 'ZS', 'ZI'])],
            ['module_id' => 'ZC-3302', 'major_id' => 'ZC', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZA', 'ZD', 'ZS'])],
            ['module_id' => 'ZC-3303', 'major_id' => 'ZC', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZC'])],
            ['module_id' => 'ZC-3304', 'major_id' => 'ZC', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZC'])],

            ['module_id' => 'ZC-3305', 'major_id' => 'ZC', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZA', 'ZD', 'ZS'])],
            ['module_id' => 'ZC-3306', 'major_id' => 'ZC', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZA', 'ZD', 'ZS'])],
            ['module_id' => 'ZC-3307', 'major_id' => 'ZC', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZA', 'ZD', 'ZS'])],
            ['module_id' => 'ZC-3308', 'major_id' => 'ZC', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZA', 'ZD', 'ZS'])],
            ['module_id' => 'ZC-3309', 'major_id' => 'ZC', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZA', 'ZD', 'ZS'])],
            ['module_id' => 'ZC-3310', 'major_id' => 'ZC', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZA', 'ZD', 'ZS'])],
            ['module_id' => 'ZC-3311', 'major_id' => 'ZC', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZA', 'ZD', 'ZS'])],
            ['module_id' => 'ZC-3312', 'major_id' => 'ZC', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZA', 'ZD', 'ZS'])],
            ['module_id' => 'ZC-3313', 'major_id' => 'ZC', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZC'])],
            ['module_id' => 'ZC-3314', 'major_id' => 'ZC', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZA', 'ZD', 'ZS'])],
            ['module_id' => 'ZC-3315', 'major_id' => 'ZC', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZA', 'ZD', 'ZS'])],
            ['module_id' => 'ZC-3316', 'major_id' => 'ZC', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZA', 'ZD', 'ZS'])],
            ['module_id' => 'ZC-3317', 'major_id' => 'ZC', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZA', 'ZD', 'ZS'])],
            ['module_id' => 'ZC-3318', 'major_id' => 'ZC', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZA', 'ZD', 'ZS'])],

            ['module_id' => 'ZC-4301', 'major_id' => 'ZC', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZD', 'ZS'])],
            ['module_id' => 'ZC-4302', 'major_id' => 'ZC', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZD'])],
            ['module_id' => 'ZC-4303', 'major_id' => 'ZC', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZC'])],
            ['module_id' => 'ZC-4304', 'major_id' => 'ZC', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZC'])],
            ['module_id' => 'ZC-4305', 'major_id' => 'ZC', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZC'])],
            ['module_id' => 'ZC-4306', 'major_id' => 'ZC', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZC'])],
            ['module_id' => 'ZC-4309', 'major_id' => 'ZC', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZC'])],
        ]);
        
        // ZA
        DB::table('module_belongs_to')->insert([
            ['module_id' => 'ZA-4301', 'major_id' => 'ZA', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZA'])],
            ['module_id' => 'ZA-4302', 'major_id' => 'ZA', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZA', 'ZD', 'ZI'])],
            ['module_id' => 'ZA-4303', 'major_id' => 'ZA', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZA', 'ZI'])],
            ['module_id' => 'ZA-4304', 'major_id' => 'ZA', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZA', 'ZI'])],
            ['module_id' => 'ZA-4305', 'major_id' => 'ZA', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZA', 'ZD', 'ZI'])],
            ['module_id' => 'ZA-4306', 'major_id' => 'ZA', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZA', 'ZD', 'ZI'])],
            ['module_id' => 'ZA-4307', 'major_id' => 'ZA', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZA', 'ZI'])],
            ['module_id' => 'ZA-4308', 'major_id' => 'ZA', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZA', 'ZI'])],
            ['module_id' => 'ZA-4309', 'major_id' => 'ZA', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZA', 'ZI'])],
            ['module_id' => 'ZA-4310', 'major_id' => 'ZA', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZA', 'ZI'])],
            ['module_id' => 'ZA-4311', 'major_id' => 'ZA', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZA', 'ZI'])],
        ]);

        // ZD 
        DB::table('module_belongs_to')->insert([
            ['module_id' => 'ZD-2301', 'major_id' => 'ZD', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZD'])],

            ['module_id' => 'ZD-4301', 'major_id' => 'ZD', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZD'])],
            ['module_id' => 'ZD-4302', 'major_id' => 'ZD', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZD', 'ZS'])],
            ['module_id' => 'ZD-4303', 'major_id' => 'ZD', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZA', 'ZD', 'ZS', 'ZI'])],
            ['module_id' => 'ZD-4309', 'major_id' => 'ZD', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZD'])],
        ]);

        // ZI
        DB::table('module_belongs_to')->insert([
            ['module_id' => 'ZI-1301', 'major_id' => 'ZI', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZI'])],

            ['module_id' => 'ZI-2301', 'major_id' => 'ZI', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZI'])],
            ['module_id' => 'ZI-2302', 'major_id' => 'ZI', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZI'])],
            ['module_id' => 'ZI-2303', 'major_id' => 'ZI', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZI'])],
            
            ['module_id' => 'ZI-4301', 'major_id' => 'ZI', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZI'])],
            ['module_id' => 'ZI-4302', 'major_id' => 'ZI', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZI'])],
            ['module_id' => 'ZI-4303', 'major_id' => 'ZI', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZI'])],
            ['module_id' => 'ZI-4304', 'major_id' => 'ZI', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZI'])],
        ]);

        // ZS
        DB::table('module_belongs_to')->insert([
            ['module_id' => 'ZS-3301', 'major_id' => 'ZS', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZS'])],
            
            ['module_id' => 'ZS-4301', 'major_id' => 'ZS', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZD', 'ZS'])],
            ['module_id' => 'ZS-4302', 'major_id' => 'ZS', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZS'])],
            ['module_id' => 'ZS-4303', 'major_id' => 'ZS', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZS'])],
            ['module_id' => 'ZS-4304', 'major_id' => 'ZS', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZS'])],
            ['module_id' => 'ZS-4305', 'major_id' => 'ZS', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZS'])],
            ['module_id' => 'ZS-4306', 'major_id' => 'ZS', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZS'])],
            ['module_id' => 'ZS-4307', 'major_id' => 'ZS', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZS'])],
            ['module_id' => 'ZS-4309', 'major_id' => 'ZS', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZS'])],
        ]);

        // XX
        DB::table('module_belongs_to')->insert([
            ['module_id' => 'AX-3201', 'major_id' => 'XX', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZC'])],
            
            ['module_id' => 'BB-4328', 'major_id' => 'XX', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZS'])],
            ['module_id' => 'BB-4332', 'major_id' => 'XX', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZA', 'ZS', 'ZI'])],
            ['module_id' => 'BB-4335', 'major_id' => 'XX', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZD'])],

            ['module_id' => 'HS-1413', 'major_id' => 'XX', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZD'])],

            ['module_id' => 'SM-1301', 'major_id' => 'XX', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZA', 'ZD', 'ZS', 'ZI'])],
            ['module_id' => 'SM-2203', 'major_id' => 'XX', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZA', 'ZD', 'ZS', 'ZI'])],
            ['module_id' => 'SM-2205', 'major_id' => 'XX', 'module_type' => 'MO', 'shared_among_majors' => true, 'all_participating_majors' => json_encode(['ZC', 'ZS'])],

            ['module_id' => 'SP-1202', 'major_id' => 'XX', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZA'])],
            ['module_id' => 'SP-1204', 'major_id' => 'XX', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZA'])],

            ['module_id' => 'TT-3301', 'major_id' => 'XX', 'module_type' => 'MO', 'shared_among_majors' => false, 'all_participating_majors' => json_encode(['ZA'])],
        ]);
        
    }
}
