<?php

namespace Database\Seeders\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StudentSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'asg_username' => '21B6027',
            'email' => '21B6027@ubd.edu.bn',
            'password' => bcrypt('password'),
            'user_type' => 'student',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('user_profile')->insert([
            'username' => '21B6027', 
            'full_name' => 'Afwan Rezal',
            'contact_number' => '+673 8903053',
            'dob' => '2000-11-04',
            'role' => 'student',
            'salutations' => null, 
            'alt_email' => 'afwan.rezal@gmail.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('student_info')->insert([
            'student_username' => '21B6027'
        ]);

        DB::table('taken_modules')->insert([
            [
                'module_id' => 'LE-1503',
                'student_id' => '21B6027',
                'assigned_md_type' => 'CB',
                'grade' => 'B',
                'status' => true
            ],

            [
                'module_id' => 'PB-1501',
                'student_id' => '21B6027',
                'assigned_md_type' => 'CB',
                'grade' => 'B',
                'status' => true
            ],
            
            [
                'module_id' => 'ZC-1201',
                'student_id' => '21B6027',
                'assigned_md_type' => 'MC',
                'grade' => 'C',
                'status' => true
            ],

            [
                'module_id' => 'ZZ-1102',
                'student_id' => '21B6027',
                'assigned_md_type' => 'DC',
                'grade' => 'B',
                'status' => true
            ],

            [
                'module_id' => 'ZZ-1103',
                'student_id' => '21B6027',
                'assigned_md_type' => 'DC',
                'grade' => 'C',
                'status' => true
            ],

            [
                'module_id' => 'LE-2503',
                'student_id' => '21B6027',
                'assigned_md_type' => 'CB',
                'grade' => 'C',
                'status' => true
            ],

            [
                'module_id' => 'LJ-1403',
                'student_id' => '21B6027',
                'assigned_md_type' => 'Other Breadth',
                'grade' => 'A',
                'status' => true
            ],

            [
                'module_id' => 'MS-1501',
                'student_id' => '21B6027',
                'assigned_md_type' => 'CB',
                'grade' => 'C',
                'status' => true
            ],

            [
                'module_id' => 'ZC-1202',
                'student_id' => '21B6027',
                'assigned_md_type' => 'MC',
                'grade' => 'B',
                'status' => true
            ],

            [
                'module_id' => 'LJ-2403',
                'student_id' => '21B6027',
                'assigned_md_type' => 'Other Breadth',
                'grade' => 'B',
                'status' => true
            ],

            [
                'module_id' => 'ZC-2205',
                'student_id' => '21B6027',
                'assigned_md_type' => 'MC',
                'grade' => 'C',
                'status' => true
            ],

            [
                'module_id' => 'ZC-3202',
                'student_id' => '21B6027',
                'assigned_md_type' => 'MC',
                'grade' => 'B',
                'status' => true
            ],
            
            [
                'module_id' => 'ZZ-1104',
                'student_id' => '21B6027',
                'assigned_md_type' => 'DC',
                'grade' => 'D',
                'status' => true
            ],
            
            [
                'module_id' => 'LJ-2404',
                'student_id' => '21B6027',
                'assigned_md_type' => 'Other Breadth',
                'grade' => 'B',
                'status' => true
            ],

            [
                'module_id' => 'ZC-2202',
                'student_id' => '21B6027',
                'assigned_md_type' => 'MC',
                'grade' => 'D',
                'status' => true
            ],

            [
                'module_id' => 'ZC-2204',
                'student_id' => '21B6027',
                'assigned_md_type' => 'MC',
                'grade' => 'B',
                'status' => true
            ],

            [
                'module_id' => 'ZC-3302',
                'student_id' => '21B6027',
                'assigned_md_type' => 'MO',
                'grade' => 'D',
                'status' => true
            ],
            
            [
                'module_id' => 'ZS-2202',
                'student_id' => '21B6027',
                'assigned_md_type' => 'MO',
                'grade' => 'D',
                'status' => true
            ],

            [
                'module_id' => 'LJ-3402',
                'student_id' => '21B6027',
                'assigned_md_type' => 'Other Breadth',
                'grade' => 'B',
                'status' => true
            ],

            [
                'module_id' => 'ZA-2202',
                'student_id' => '21B6027',
                'assigned_md_type' => 'MO',
                'grade' => 'B',
                'status' => true
            ],

            [
                'module_id' => 'ZC-2201',
                'student_id' => '21B6027',
                'assigned_md_type' => 'MC',
                'grade' => 'D',
                'status' => true
            ],

            [
                'module_id' => 'ZC-2203',
                'student_id' => '21B6027',
                'assigned_md_type' => 'MO',
                'grade' => 'B',
                'status' => true
            ],
            
            [
                'module_id' => 'ZS-2201',
                'student_id' => '21B6027',
                'assigned_md_type' => 'MO',
                'grade' => 'B',
                'status' => true
            ],

            [
                'module_id' => 'LJ-3403',
                'student_id' => '21B6027',
                'assigned_md_type' => 'Other Breadth',
                'grade' => 'B',
                'status' => true
            ],
            
            [
                'module_id' => 'LJ-3404',
                'student_id' => '21B6027',
                'assigned_md_type' => 'Other Breadth',
                'grade' => 'B',
                'status' => true
            ],

            [
                'module_id' => 'ZC-3201',
                'student_id' => '21B6027',
                'assigned_md_type' => 'MC',
                'grade' => 'B',
                'status' => true
            ],

            [
                'module_id' => 'ZC-3301',
                'student_id' => '21B6027',
                'assigned_md_type' => 'MC',
                'grade' => 'C',
                'status' => true
            ],

            [
                'module_id' => 'ZC-4301',
                'student_id' => '21B6027',
                'assigned_md_type' => 'MO',
                'grade' => 'D',
                'status' => true
            ],
        ]);
    }
}
