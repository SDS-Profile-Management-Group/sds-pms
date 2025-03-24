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
            'asg_username' => 'fname.lname',
            'email' => 'fname.lname@ubd.edu.bn',
            'password' => bcrypt('password'),
            'user_type' => 'staff',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('user_profile')->insert([
            'username' => 'fname.lname', 
            'full_name' => 'Afian Rezal',
            'contact_number' => '+673 8903053',
            'dob' => '2000-11-04',
            'role' => 'staff',
            'salutations' => null, 
            'alt_email' => 'afian.rezal@gmail.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('staff_info')->insert([
            'staff_username' => 'fname.lname',
            'staff_type' => 'Academic',
            'pl_privilige' => true,
        ]);
    }
}
