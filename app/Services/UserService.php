<?php

namespace App\Services;

use App\Models\User;
use App\Models\Profile;
use App\Models\StudentInfo;
use App\Models\Info\Staff;
use App\Models\Student\ModulesTaken;

class UserService
{
    public function registerStudent($user, $incomingFields){
        // INSERT => 'student_info'
        StudentInfo::create([
            'student_username' => $user->asg_username,
            'student_nationality' => $incomingFields['student_nationality'],
            'major_id' => $incomingFields['major_id'],
        ]);

        // createModuleArray($modules)
        $modules = [
            ['module_id' => 'LE-1503', 'student_id' => $user->asg_username, 'assigned_md_type' => 'CB'],
            ['module_id' => 'LE-2503', 'student_id' => $user->asg_username, 'assigned_md_type' => 'CB'],
            ['module_id' => 'MS-1501', 'student_id' => $user->asg_username, 'assigned_md_type' => 'CB'],

            ['module_id' => 'ZZ-1102', 'student_id' => $user->asg_username, 'assigned_md_type' => 'DC'],
            ['module_id' => 'ZZ-1103', 'student_id' => $user->asg_username, 'assigned_md_type' => 'DC'],
            ['module_id' => 'ZZ-1104', 'student_id' => $user->asg_username, 'assigned_md_type' => 'DC'],

            ['module_id' => 'ZC-2205', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
            ['module_id' => 'ZC-4202', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
        ];

        // arrayPush($modules, ...resultOfNationality('student_nationality))

        switch($incomingFields['student_nationality']){
            case 'local':
                array_push($modules,...[['module_id' => 'PB-1501', 'student_id' => $user->asg_username, 'assigned_md_type' => 'CB']]);
                break;
            case 'international':
                array_push($modules,...[['module_id' => 'PB-1502', 'student_id' => $user->asg_username, 'assigned_md_type' => 'CB']]);
                break;
        }

        // arrayPush($modules, ...resultOfMajor('major_id))
        switch ($incomingFields['major_id']) {
            case 'ZA':
                array_push($modules,...[
                    ['module_id' => 'ZC-1201', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                    ['module_id' => 'ZC-2202', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],

                    ['module_id' => 'ZA-2201', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                    ['module_id' => 'ZA-2202', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                    ['module_id' => 'ZA-2203', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                    ['module_id' => 'ZA-2204', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],

                    ['module_id' => 'ZA-3201', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                    ['module_id' => 'ZA-3202', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],

                    ['module_id' => 'ZA-4290', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                ]);
                break;

            case 'ZC':
                array_push($modules,...[
                    ['module_id' => 'ZC-1201', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                    ['module_id' => 'ZC-1202', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],

                    ['module_id' => 'ZC-2201', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                    ['module_id' => 'ZC-2202', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                    ['module_id' => 'ZC-2203', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                    ['module_id' => 'ZC-2204', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],

                    ['module_id' => 'ZC-3201', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                    ['module_id' => 'ZC-3202', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],

                    ['module_id' => 'ZC-4290', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                ]);
                break;

            case 'ZI':
                array_push($modules,...[
                    ['module_id' => 'ZI-1201', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                    ['module_id' => 'ZI-1202', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],

                    ['module_id' => 'ZA-2201', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                    ['module_id' => 'ZC-2202', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                    ['module_id' => 'ZI-2201', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                    ['module_id' => 'ZI-2202', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],

                    ['module_id' => 'ZA-3201', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                    ['module_id' => 'ZA-3202', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],

                    ['module_id' => 'ZI-4290', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                ]);
                break;

            case 'ZD':
                array_push($modules,...[
                    ['module_id' => 'ZC-1201', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                    ['module_id' => 'ZD-1201', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],

                    ['module_id' => 'BB-2207', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                    ['module_id' => 'ZC-2201', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                    ['module_id' => 'ZC-2203', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],

                    ['module_id' => 'ZA-3202', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                    ['module_id' => 'ZD-3201', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],

                    ['module_id' => 'ZD-4201', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                    ['module_id' => 'ZD-4290', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                ]);
                break;

            case 'ZS':
                array_push($modules,...[
                    ['module_id' => 'ZC-1201', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                    ['module_id' => 'ZS-1201', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],

                    ['module_id' => 'BB-2207', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                    ['module_id' => 'ZC-2202', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                    ['module_id' => 'ZC-2203', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                    ['module_id' => 'ZS-2201', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                    ['module_id' => 'ZS-2202', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],

                    ['module_id' => 'ZS-3201', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],

                    ['module_id' => 'ZS-4290', 'student_id' => $user->asg_username, 'assigned_md_type' => 'MC'],
                ]);
                break;
        }

        // INSERT => 'taken_modules'
        ModulesTaken::insert($modules);
    }

    public function registerStaff($user, $incomingFields)
    {
        if ($incomingFields['staff_type']=== 'program_leader'){
            $pl_privilege = true;
        } else if ($incomingFields['staff_type']=== 'lecturer') {
            $pl_privilege = false;
        }

        Staff::create([
            'staff_username' => $user->asg_username,
            'staff_type' => 'Academic',
            'pl_privilige' => $pl_privilege,
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