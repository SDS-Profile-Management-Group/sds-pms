<?php

namespace App\Services;

use App\Models\User;
use App\Models\Profile;
use App\Models\StudentInfo;
use App\Models\StaffInfo;
use App\Models\Student\ModulesTaken;

class UserService
{
    public function registerStudent($user, $incomingFields)
    {
        // Insert into the 'student_info' table
        StudentInfo::create([
            'student_username' => $user->asg_username,
            'student_nationality' => $incomingFields['student_nationality'],
            'major_id' => $incomingFields['major_id'],
        ]);

        // TODO: Make case to put in MC according to Major

        // Insert into the 'ModulesTaken' table
        ModulesTaken::insert([
            ['module_id' => 'LE-1503', 'student_id' => $user->asg_username, 'assigned_md_type' => 'CB'],
            ['module_id' => 'LE-2503', 'student_id' => $user->asg_username, 'assigned_md_type' => 'CB'],
            ['module_id' => 'PB-1501', 'student_id' => $user->asg_username, 'assigned_md_type' => 'CB'],
            ['module_id' => 'MS-1501', 'student_id' => $user->asg_username, 'assigned_md_type' => 'CB'],
        ]);
    }

    public function registerStaff($user)
    {
        // Insert into the 'staff_info' table
        StaffInfo::create([
            'staff_username' => $user->asg_username,
        ]);
    }

    public function createUserProfile($user, $incomingFields)
    {
        // Create the profile record
        Profile::create([
            'username' => $user->asg_username,
            'full_name' => $incomingFields['full_name'],
            'role' => $user->user_type,
        ]);
    }
}