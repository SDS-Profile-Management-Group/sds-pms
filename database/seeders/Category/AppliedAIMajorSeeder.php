<?php

namespace Database\Seeders\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppliedAIMajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('module_belongs_to')->insert([
            [
                'module_id' => '', 
                'major_id' => '', 
                'module_type' => '',
                'is_required_in_other_majors' => false,
                'other_required_majors' => json_encode([])
            ],
        ]);
    }
}
