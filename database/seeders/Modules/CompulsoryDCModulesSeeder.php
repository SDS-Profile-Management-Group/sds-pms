<?php

namespace Database\Seeders\Modules;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompulsoryDCModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('modules')->insert([
            [
                'module_id' => 'ZZ-1102',
                'module_name' => 'Programming Fundamentals',
                'mc' => '4',
                'level' => '1000'
            ],
            
            [
                'module_id' => 'ZZ-1103',
                'module_name' => 'Introduction to Digital Transformation',
                'mc' => '4',
                'level' => '1000'
            ],
            
            [
                'module_id' => 'ZZ-1104',
                'module_name' => 'Essential Mathematics for Digital Science',
                'mc' => '4',
                'level' => '1000'
            ],
            
            [
                'module_id' => 'LE-1503',
                'module_name' => 'Communication Skills I: Academic Reading and Writing Skills',
                'mc' => '4',
                'level' => '1000'
            ],
            
            [
                'module_id' => 'LE-2503',
                'module_name' => 'Communication Skills II: Academic Report Writing and Presentation',
                'mc' => '4',
                'level' => '2000'
            ],
            
            [
                'module_id' => 'PB-1501',
                'module_name' => 'Melayu Islam Beraja (MIB)',
                'mc' => '4',
                'level' => '1000'
            ],
            
            [
                'module_id' => 'MS-1501',
                'module_name' => 'Islamic Civilisation and The Modern World',
                'mc' => '4',
                'level' => '1000'
            ],
            
            [
                'module_id' => 'PB-1502',
                'module_name' => 'Introduction to Brunei Darussalam for non-Bruneian students',
                'mc' => '4',
                'level' => '1000'
            ]
        ]);

    }
}
