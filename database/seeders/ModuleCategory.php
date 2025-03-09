<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleCategory extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('module_belongs_to')->insert([
            // Template
            // ['module_id' => '', 'major_id' => '', 'module_type' => '', 'mc' => ''], 

            // * Degree Core
            ['module_id' => 'ZZ-1102', 'major_id' => 'ZZ', 'module_type' => 'DC', 'mc' => '4'],
            ['module_id' => 'ZZ-1103', 'major_id' => 'ZZ', 'module_type' => 'DC', 'mc' => '4'],
            ['module_id' => 'ZZ-1104', 'major_id' => 'ZZ', 'module_type' => 'DC', 'mc' => '4'],

            // * Compulsory Breadth
            ['module_id' => 'LE-1503', 'major_id' => 'XX', 'module_type' => 'CM', 'mc' => '4'],
            ['module_id' => 'LE-2503', 'major_id' => 'XX', 'module_type' => 'CM', 'mc' => '4'],
            ['module_id' => 'MS-1501', 'major_id' => 'XX', 'module_type' => 'CM', 'mc' => '4'],
            ['module_id' => 'PB-1501', 'major_id' => 'XX', 'module_type' => 'CM', 'mc' => '4'],
            ['module_id' => 'PB-1502', 'major_id' => 'XX', 'module_type' => 'CM', 'mc' => '4'],

            // * Other entries
            ['module_id' => 'ZC-1201', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'], // (AI Robo MC, Data Science, Cybersecurity)
            ['module_id' => 'ZC-2201', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'], // (Duplicate: Data Science)
            ['module_id' => 'ZC-2202', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'], // (AI Robo MC, Cybersecurity, AAI)
            ['module_id' => 'ZC-2203', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'], // (Data Science, Cybersecurity)
            ['module_id' => 'ZC-2205', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'], // (AI Robo MC, Data Science, Cybersecurity, AAI)
            ['module_id' => 'BB-2207', 'major_id' => 'XX', 'module_type' => 'MC', 'mc' => '4'], // (Duplicate: Cybersecurity)
            ['module_id' => 'ZA-2201', 'major_id' => 'ZA', 'module_type' => 'MC', 'mc' => '4'], // (Duplicate: AAI)
            ['module_id' => 'ZA-3201', 'major_id' => 'ZA', 'module_type' => 'MC', 'mc' => '4'], // (Duplicate: AAI)
            ['module_id' => 'ZA-3202', 'major_id' => 'ZA', 'module_type' => 'MC', 'mc' => '4'], // (Data Science, AAI)
            ['module_id' => 'ZC-4202', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'], // (AI Robo MC, Data Science, Cybersecurity, AAI)

            
            // * Computer Science MC
            // ['module_id' => 'ZC-1201', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],
            ['module_id' => 'ZC-1202', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],

            // ['module_id' => 'ZC-2201', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],
            // ['module_id' => 'ZC-2202', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],
            // ['module_id' => 'ZC-2203', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],
            ['module_id' => 'ZC-2204', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],
            // ['module_id' => 'ZC-2205', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],

            ['module_id' => 'ZC-3201', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],
            ['module_id' => 'ZC-3202', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],

            // ['module_id' => 'ZC-4202', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],
            ['module_id' => 'ZC-4290', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '8'],

            // * AI Robo
            // ['module_id' => 'ZC-1201', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],
            // ['module_id' => 'ZC-2202', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],
            // ['module_id' => 'ZC-2205', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],
            // ['module_id' => 'ZC-4202', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],

            // ['module_id' => 'ZA-2201', 'major_id' => 'ZA', 'module_type' => 'MC', 'mc' => '4'],
            ['module_id' => 'ZA-2202', 'major_id' => 'ZA', 'module_type' => 'MC', 'mc' => '4'],
            ['module_id' => 'ZA-2203', 'major_id' => 'ZA', 'module_type' => 'MC', 'mc' => '4'],
            ['module_id' => 'ZA-2204', 'major_id' => 'ZA', 'module_type' => 'MC', 'mc' => '4'],

            // ['module_id' => 'ZA-3201', 'major_id' => 'ZA', 'module_type' => 'MC', 'mc' => '4'],
            // ['module_id' => 'ZA-3202', 'major_id' => 'ZA', 'module_type' => 'MC', 'mc' => '4'],

            ['module_id' => 'ZA-4290', 'major_id' => 'ZA', 'module_type' => 'MC', 'mc' => '8'],

            // * Data Science

            // ['module_id' => 'ZC-1201', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],
            // ['module_id' => 'ZC-2201', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],
            // ['module_id' => 'ZC-2203', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],
            // ['module_id' => 'ZC-2205', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],
            // ['module_id' => 'ZA-3202', 'major_id' => 'ZA', 'module_type' => 'MC', 'mc' => '4'],
            // ['module_id' => 'ZC-4202', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],
            

            ['module_id' => 'ZD-1201', 'major_id' => 'ZD', 'module_type' => 'MC', 'mc' => '4'],

            // ['module_id' => 'BB-2207', 'major_id' => 'XX', 'module_type' => 'MC', 'mc' => '4'],

            ['module_id' => 'ZD-3201', 'major_id' => 'ZD', 'module_type' => 'MC', 'mc' => '4'],

            ['module_id' => 'ZD-4201', 'major_id' => 'ZD', 'module_type' => 'MC', 'mc' => '4'],
            ['module_id' => 'ZD-4290', 'major_id' => 'ZD', 'module_type' => 'MC', 'mc' => '8'],

            // * Cybersecurity
            // ['module_id' => 'ZC-1201', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],
            // ['module_id' => 'ZC-2205', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],
            // ['module_id' => 'BB-2207', 'major_id' => 'XX', 'module_type' => 'MC', 'mc' => '4'],
            // ['module_id' => 'ZC-2202', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],
            // ['module_id' => 'ZC-2203', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],
            // ['module_id' => 'ZC-4202', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],

            ['module_id' => 'ZS-1201', 'major_id' => 'ZS', 'module_type' => 'MC', 'mc' => '4'],

            ['module_id' => 'ZS-2201', 'major_id' => 'ZS', 'module_type' => 'MC', 'mc' => '4'],
            ['module_id' => 'ZS-2202', 'major_id' => 'ZS', 'module_type' => 'MC', 'mc' => '4'],

            ['module_id' => 'ZS-3201', 'major_id' => 'ZS', 'module_type' => 'MC', 'mc' => '4'],
            ['module_id' => 'ZS-4290', 'major_id' => 'ZS', 'module_type' => 'MC', 'mc' => '8'],

            // * AAI
            // ['module_id' => 'ZA-2201', 'major_id' => 'ZA', 'module_type' => 'MC', 'mc' => '4'],
            // ['module_id' => 'ZC-2202', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],
            // ['module_id' => 'ZC-2205', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],
            // ['module_id' => 'ZA-3201', 'major_id' => 'ZA', 'module_type' => 'MC', 'mc' => '4'],
            // ['module_id' => 'ZA-3202', 'major_id' => 'ZA', 'module_type' => 'MC', 'mc' => '4'],
            // ['module_id' => 'ZC-4202', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],

            ['module_id' => 'ZI-1201', 'major_id' => 'ZI', 'module_type' => 'MC', 'mc' => '4'],
            ['module_id' => 'ZI-1202', 'major_id' => 'ZI', 'module_type' => 'MC', 'mc' => '4'],

            ['module_id' => 'ZI-2201', 'major_id' => 'ZI', 'module_type' => 'MC', 'mc' => '4'],
            ['module_id' => 'ZI-2202', 'major_id' => 'ZI', 'module_type' => 'MC', 'mc' => '4'],

            ['module_id' => 'ZI-4290', 'major_id' => 'ZI', 'module_type' => 'MC', 'mc' => '8'],

        ]);
    }
}
