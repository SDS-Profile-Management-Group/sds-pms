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

        // DB:table('')->insert([
        //     [
        //         'module_id' => '',
        //         'student_id' => '',
        //         'assigned_id_type' => '',
        //         'taken_module_name' => '',

        //     ],
        // ]);
    }
}
