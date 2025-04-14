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
            [
                'asg_username' => '21B6027',
                'email' => '21B6027@ubd.edu.bn',
                'password' => bcrypt('password'),
                'user_type' => 'student',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'asg_username' => '25B6028',
                'email' => '25B6028@ubd.edu.bn',
                'password' => bcrypt('password'),
                'user_type' => 'student',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'asg_username' => '26B6029',
                'email' => '26B6029@ubd.edu.bn',
                'password' => bcrypt('password'),
                'user_type' => 'student',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
        DB::table('user_profile')->insert([
            [
                'username' => '21B6027',
                'full_name' => 'Afwan Rezal',
                'contact_number' => '+673 8903053',
                'dob' => '2000-11-04',
                'role' => 'student',
                'salutations' => null,
                'alt_email' => 'afwan.rezal@gmail.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => '25B6028',
                'full_name' => 'Student Two',
                'contact_number' => '+673 8903054',
                'dob' => '2001-05-15',
                'role' => 'student',
                'salutations' => null,
                'alt_email' => 'student.two@gmail.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => '26B6029',
                'full_name' => 'Student Three',
                'contact_number' => '+673 8903055',
                'dob' => '2002-09-23',
                'role' => 'student',
                'salutations' => null,
                'alt_email' => 'student.three@gmail.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
        DB::table('student_info')->insert([
            [
                'student_username' => '21B6027',
                'cgpa' => json_encode([
                    'Semester 1' => '2.92',
                    'Semester 2' => '3.10',
                    'Semester 3' => '2.83',
                    'Semester 4' => '2.75',
                    'Semester 5' => '2.82',
                    'Semester 6' => '2.82',
                    'Semester 7' => '2.82',
                ])
            ],
            [
                'student_username' => '25B6028',
                'cgpa' => json_encode([
                    'Semester 1' => '3.00',
                    'Semester 2' => '2.95',
                    'Semester 3' => '3.10',
                    'Semester 4' => '3.20',
                    'Semester 5' => '3.05',
                    'Semester 6' => '3.15',
                    'Semester 7' => '3.10',
                ])
            ],
            [
                'student_username' => '26B6029',
                'cgpa' => json_encode([
                    'Semester 1' => '2.75',
                    'Semester 2' => '2.80',
                    'Semester 3' => '2.90',
                    'Semester 4' => '3.00',
                    'Semester 5' => '2.95',
                    'Semester 6' => '3.05',
                    'Semester 7' => '3.00',
                ])
            ],
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
                'assigned_md_type' => 'OB',
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
                'assigned_md_type' => 'OB',
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
                'assigned_md_type' => 'OB',
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
                'assigned_md_type' => 'OB',
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
                'assigned_md_type' => 'OB',
                'grade' => 'B',
                'status' => true
            ],
            
            [
                'module_id' => 'LJ-3404',
                'student_id' => '21B6027',
                'assigned_md_type' => 'OB',
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
