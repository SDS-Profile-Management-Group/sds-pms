<?php

namespace Database\Seeders\Modules;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComputerScienceModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('modules')->insert([
            [
                'module_id' => 'ZC-1201',
                'module_name' => 'Computer Architecture and Organisation',
                'mc' => '4',
                'level' => '1000'
            ],
            
            [
                'module_id' => 'ZC-1202',
                'module_name' => 'Augmented and Virtual Reality',
                'mc' => '4',
                'level' => '1000'
            ],
            
            [
                'module_id' => 'ZC-2201',
                'module_name' => 'Database Design',
                'mc' => '4',
                'level' => '2000'
            ],
            
            [
                'module_id' => 'ZC-2202',
                'module_name' => 'Operating Systems',
                'mc' => '4',
                'level' => '2000'
            ],
            
            [
                'module_id' => 'ZC-2203',
                'module_name' => 'Computer Networks',
                'mc' => '4',
                'level' => '2000'
            ],
            
            [
                'module_id' => 'ZC-2204',
                'module_name' => 'Software Engineering',
                'mc' => '4',
                'level' => '2000'
            ],
            
            [
                'module_id' => 'ZC-2205',
                'module_name' => 'Data Structures and Algorithms',
                'mc' => '4',
                'level' => '2000'
            ],
            
            [
                'module_id' => 'ZC-3201',
                'module_name' => 'Software Development Lab',
                'mc' => '4',
                'level' => '3000'
            ],
            
            [
                'module_id' => 'ZC-3202',
                'module_name' => 'Human Computer Interaction',
                'mc' => '4',
                'level' => '3000'
            ],
            
            [
                'module_id' => 'ZC-3301',
                'module_name' => 'Computer Ethics',
                'mc' => '4',
                'level' => '3000'
            ],
            
            [
                'module_id' => 'ZC-3302',
                'module_name' => 'Internet Programming and Development',
                'mc' => '4',
                'level' => '3000'
            ],
            
            [
                'module_id' => 'ZC-3303',
                'module_name' => 'Programming Languages',
                'mc' => '4',
                'level' => '3000'
            ],
            
            [
                'module_id' => 'ZC-3304',
                'module_name' => 'Interactivity and Computation for Creative Practice',
                'mc' => '4',
                'level' => '3000'
            ],
            
            [
                'module_id' => 'ZC-4202',
                'module_name' => 'Entrepreneurship for Digital Scientists',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZC-4290',
                'module_name' => 'Final Year Project',
                'mc' => '8',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZC-4301',
                'module_name' => 'Computer Graphics',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZC-4302',
                'module_name' => 'Internet Application Development',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZC-4303',
                'module_name' => 'Large Scale Software Development',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZC-4304',
                'module_name' => 'Computational Modelling',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZC-4305',
                'module_name' => 'Digital Product Management',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZC-4306',
                'module_name' => 'Digital Business Models',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZC-4309',
                'module_name' => 'Emerging Technologies in Computing',
                'mc' => '4',
                'level' => '4000'
            ]
        ]);
    }
}
