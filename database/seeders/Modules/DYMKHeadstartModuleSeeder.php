<?php

namespace Database\Seeders\Modules;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DYMKHeadstartModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('modules')->insert([
            [
                'module_id' => 'ZC-3305',
                'module_name' => 'Systems Application and Products for Data Processing',
                'mc' => '4',
                'level' => '3000'
            ],
            
            [
                'module_id' => 'ZC-3306',
                'module_name' => 'Business Application Programming',
                'mc' => '4',
                'level' => '3000'
            ],
            
            [
                'module_id' => 'ZC-3307',
                'module_name' => 'Advanced Business Application Programming',
                'mc' => '4',
                'level' => '3000'
            ],
            
            [
                'module_id' => 'ZC-3308',
                'module_name' => 'User Experience Design Technology',
                'mc' => '4',
                'level' => '3000'
            ],
            
            [
                'module_id' => 'ZC-3309',
                'module_name' => 'User Experience Development Fundamentals',
                'mc' => '4',
                'level' => '3000'
            ],
            
            [
                'module_id' => 'ZC-3310',
                'module_name' => 'Advanced User Interface System and Technology',
                'mc' => '4',
                'level' => '3000'
            ],
            
            [
                'module_id' => 'ZC-3311',
                'module_name' => 'Change Management',
                'mc' => '2',
                'level' => '3000'
            ],
            
            [
                'module_id' => 'ZC-3312',
                'module_name' => 'Industrial Project Management',
                'mc' => '2',
                'level' => '3000'
            ],
            
            [
                'module_id' => 'ZC-3313',
                'module_name' => 'Game Programming',
                'mc' => '4',
                'level' => '3000'
            ]
        ]);
    }
}
