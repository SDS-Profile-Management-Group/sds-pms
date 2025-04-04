<?php

namespace Database\Seeders\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'asg_username' => 'afian.rezal',
                'email' => 'afian.rezal@ubd.edu.bn',
                'password' => bcrypt('password'),
                'user_type' => 'staff',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'asg_username' => 'nabil.fadilah',
                'email' => 'nabil.fadilah@ubd.edu.bn',
                'password' => bcrypt('password'),
                'user_type' => 'staff',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'asg_username' => 'amira.syahira',
                'email' => 'amira.syahira@ubd.edu.bn',
                'password' => bcrypt('password'),
                'user_type' => 'staff',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
        DB::table('user_profile')->insert([
            [
                'username' => 'afian.rezal',
                'full_name' => 'Afian Rezal',
                'contact_number' => '+673 8903053',
                'dob' => '1985-06-12',
                'role' => 'staff',
                'alt_email' => 'afian.rezal@gmail.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'nabil.fadilah',
                'full_name' => 'Nabil Fadilah',
                'contact_number' => '+673 8903054',
                'dob' => '1990-08-25',
                'role' => 'staff',
                'alt_email' => 'nabil.fadilah@gmail.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'amira.syahira',
                'full_name' => 'Amira Syahira',
                'contact_number' => '+673 8903055',
                'dob' => '1992-04-17',
                'role' => 'staff',
                'alt_email' => 'amira.syahira@gmail.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
        DB::table('staff_info')->insert([
            [
                'staff_username' => 'afian.rezal',
                'staff_type' => 'Academic',
                'pl_privilige' => true,
            ],
            [
                'staff_username' => 'nabil.fadilah',
                'staff_type' => 'Academic',
                'pl_privilige' => false,
            ],
            [
                'staff_username' => 'amira.syahira',
                'staff_type' => 'Academic',
                'pl_privilige' => true,
            ],
        ]);
    }
}
