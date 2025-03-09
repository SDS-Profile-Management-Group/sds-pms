<?php

namespace Database\Seeders\Modules;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppliedAIModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('modules')->insert([
            [
                'module_id' => 'ZI-1201',
                'module_name' => 'Artificial Intelligence (AI) Applications II',
                'mc' => '4',
                'level' => '1000'
            ],
            
            [
                'module_id' => 'ZI-2201',
                'module_name' => 'Blockchain Specialization I',
                'mc' => '4',
                'level' => '2000'
            ],
            
            [
                'module_id' => 'ZI-2301',
                'module_name' => 'Applied Data Analytics II',
                'mc' => '4',
                'level' => '2000'
            ],
            
            [
                'module_id' => 'ZI-2302',
                'module_name' => 'Advanced Artificial Intelligence Applications',
                'mc' => '4',
                'level' => '2000'
            ],
            
            [
                'module_id' => 'ZI-4201',
                'module_name' => 'Advanced Artificial Intelligence Applications',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZI-4290',
                'module_name' => 'Final Year Project',
                'mc' => '8',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZI-4301',
                'module_name' => 'Advanced Applied Data Analytics I',
                'mc' => '4',
                'level' => '4000'
            ]
        ]);
    }
}
