<?php

namespace Database\Seeders\Modules;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NonSDSModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('modules')->insert([
            [
                'module_id' => 'AX-3201',
                'module_name' => 'Computer Generated Imagery',
                'mc' => '4',
                'level' => '3000'
            ],
            
            [
                'module_id' => 'BB-2207',
                'module_name' => 'Business Information Systems',
                'mc' => '4',
                'level' => '2000'
            ],
            
            [
                'module_id' => 'BB-4328',
                'module_name' => 'Management Information Systems',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'BB-4332',
                'module_name' => 'Project Management',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'BB-4335',
                'module_name' => 'Decision Support Systems',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'HS-1412',
                'module_name' => 'Biostatistics',
                'mc' => '4',
                'level' => '1000'
            ],
            
            [
                'module_id' => 'SM-1301',
                'module_name' => 'Discrete Mathematics',
                'mc' => '4',
                'level' => '1000'
            ],
            
            [
                'module_id' => 'SM-2203',
                'module_name' => 'Linear Algebra and its Applications',
                'mc' => '4',
                'level' => '2000'
            ],
            
            [
                'module_id' => 'SM-2205',
                'module_name' => 'Intermediate Statistics',
                'mc' => '4',
                'level' => '2000'
            ],
            
            [
                'module_id' => 'SP-1202',
                'module_name' => 'Electricity and Magnetism',
                'mc' => '4',
                'level' => '1000'
            ],
            
            [
                'module_id' => 'SP-1204',
                'module_name' => 'Classical Mechanics',
                'mc' => '4',
                'level' => '1000'
            ],
            
            [
                'module_id' => 'LJ-1403',
                'module_name' => 'Japanese I',
                'mc' => '4',
                'level' => '1000'
            ],

            [
                'module_id' => 'LJ-2403',
                'module_name' => 'Japanese II',
                'mc' => '4',
                'level' => '2000'
            ],

            [
                'module_id' => 'LJ-2404',
                'module_name' => 'Japanese III',
                'mc' => '4',
                'level' => '2000'
            ],

            [
                'module_id' => 'LJ-3402',
                'module_name' => 'Japanese IV',
                'mc' => '4',
                'level' => '3000'
            ],

            [
                'module_id' => 'LJ-3403',
                'module_name' => 'Japanese V',
                'mc' => '4',
                'level' => '3000'
            ],

            [
                'module_id' => 'LJ-3404',
                'module_name' => 'Japanese VI',
                'mc' => '4',
                'level' => '3000'
            ],
        ]);
    }
}
