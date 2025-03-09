<?php

namespace Database\Seeders\Modules;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataScienceModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('modules')->insert([
            [
                'module_id' => 'ZD-1201',
                'module_name' => 'Introduction to Data Analytics',
                'mc' => '4',
                'level' => '1000'
            ],
            
            [
                'module_id' => 'ZD-2301',
                'module_name' => 'Data Engineering',
                'mc' => '4',
                'level' => '2000'
            ],
            
            [
                'module_id' => 'ZD-3201',
                'module_name' => 'Data Analytics Lab',
                'mc' => '4',
                'level' => '3000'
            ],
            
            [
                'module_id' => 'ZD-4201',
                'module_name' => 'Big Data Analytics and Data Warehousing',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZD-4290',
                'module_name' => 'Final Year Project',
                'mc' => '8',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZD-4301',
                'module_name' => 'Bioinformatics',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZD-4302',
                'module_name' => 'Business Technology Management',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZD-4303',
                'module_name' => 'Digital Business Models',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZD-4309',
                'module_name' => 'Emerging Technologies in Data Analytics',
                'mc' => '4',
                'level' => '4000'
            ]
        ]);
    }
}
