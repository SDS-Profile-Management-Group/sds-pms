<?php

namespace Database\Seeders\Modules;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AIRoboticsModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('modules')->insert([
            [
                'module_id' => 'ZA-1201',
                'module_name' => 'Artificial Intelligence (AI) Applications I',
                'mc' => '4',
                'level' => '1000'
            ],
            
            [
                'module_id' => 'ZA-1301',
                'module_name' => 'Applied Data Analytics I',
                'mc' => '4',
                'level' => '1000'
            ],
            
            [
                'module_id' => 'ZA-2201',
                'module_name' => 'Artificial Intelligence',
                'mc' => '4',
                'level' => '2000'
            ],
            
            [
                'module_id' => 'ZA-2202',
                'module_name' => 'Physical Computing for Intelligent Systems',
                'mc' => '4',
                'level' => '2000'
            ],
            
            [
                'module_id' => 'ZA-2203',
                'module_name' => 'Robotics Systems',
                'mc' => '4',
                'level' => '2000'
            ],
            
            [
                'module_id' => 'ZA-2204',
                'module_name' => 'Electronics for Intelligent Systems',
                'mc' => '4',
                'level' => '2000'
            ],
            
            [
                'module_id' => 'ZA-3201',
                'module_name' => 'Intelligent Systems Lab',
                'mc' => '4',
                'level' => '3000'
            ],
            
            [
                'module_id' => 'ZA-3202',
                'module_name' => 'Machine Learning',
                'mc' => '4',
                'level' => '3000'
            ],
            
            [
                'module_id' => 'ZA-4290',
                'module_name' => 'Final Year Project',
                'mc' => '8',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZA-4301',
                'module_name' => 'Autonomous Mobile Robots',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZA-4302',
                'module_name' => 'Deep Learning',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZA-4303',
                'module_name' => 'Graph Models',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZA-4304',
                'module_name' => 'Multi Agent Systems',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZA-4305',
                'module_name' => 'Information Retrieval',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZA-4306',
                'module_name' => 'Natural Language Processing',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZA-4307',
                'module_name' => 'Artificial Life and Evolutionary Computation',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZA-4308',
                'module_name' => 'Machine Perception',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZA-4309',
                'module_name' => 'Emerging Technologies in Intelligent Systems',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZA-4310',
                'module_name' => 'Smart Systems for IR 4.0',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZA-4311',
                'module_name' => 'Precision Agriculture',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZA-4313',
                'module_name' => 'Advanced Applied Data Analytics II',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZA-4314',
                'module_name' => 'Machine Learning Specialization I',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZA-4315',
                'module_name' => 'Machine Learning Specialization II',
                'mc' => '4',
                'level' => '4000'
            ]
        ]);
    }
}
