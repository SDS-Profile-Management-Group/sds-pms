<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        DB::table('modules')->insert([
            ['module_id' => 'AX-3201', 'module_name' => 'Computer Generated Imagery'],

            ['module_id' => 'BB-2207', 'module_name' => 'Business Information Systems'],
            ['module_id' => 'BB-4328', 'module_name' => 'Management Information Systems'],
            ['module_id' => 'BB-4332', 'module_name' => 'Project Management'],
            ['module_id' => 'BB-4335', 'module_name' => 'Decision Support Systems'],

            ['module_id' => 'HS-1412', 'module_name' => 'Biostatistics'],

            ['module_id' => 'SM-1301', 'module_name' => 'Discrete Mathematics'],
            ['module_id' => 'SM-2203', 'module_name' => 'Linear Algebra and its Applications'],
            ['module_id' => 'SM-2205', 'module_name' => 'Intermediate Statistics'],
            ['module_id' => 'SP-1202', 'module_name' => 'Electricity and Magnetism'],
            ['module_id' => 'SP-1204', 'module_name' => 'Classical Mechanics'],

            ['module_id' => 'TM-3301', 'module_name' => 'Product Design Engineering'],
        ]);

    }
}
