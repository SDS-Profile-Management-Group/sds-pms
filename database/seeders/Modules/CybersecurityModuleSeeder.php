<?php

namespace Database\Seeders\Modules;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CybersecurityModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('modules')->insert([
            [
                'module_id' => 'ZS-1201',
                'module_name' => 'Introduction to Cybersecurity',
                'mc' => '4',
                'level' => '1000'
            ],
            
            [
                'module_id' => 'ZS-2201',
                'module_name' => 'Digital Forensics',
                'mc' => '4',
                'level' => '2000'
            ],
            
            [
                'module_id' => 'ZS-2202',
                'module_name' => 'Computer Security',
                'mc' => '4',
                'level' => '2000'
            ],
            
            [
                'module_id' => 'ZS-2302',
                'module_name' => 'Blockchain Specialization II',
                'mc' => '4',
                'level' => '2000'
            ],
            
            [
                'module_id' => 'ZS-3201',
                'module_name' => 'Cybersecurity and Forensics Lab',
                'mc' => '4',
                'level' => '3000'
            ],
            
            [
                'module_id' => 'ZS-3301',
                'module_name' => 'Blockchain Technology',
                'mc' => '4',
                'level' => '3000'
            ],
            
            [
                'module_id' => 'ZS-4290',
                'module_name' => 'Final Year Project',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZS-4301',
                'module_name' => 'Cloud Computing',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZS-4302',
                'module_name' => 'Cyber Criminology',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZS-4303',
                'module_name' => 'Cybercrime Law and Investigations',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZS-4304',
                'module_name' => 'Networks and Components Security',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZS-4305',
                'module_name' => 'Application and System Software Security',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZS-4306',
                'module_name' => 'Blockchain Applications for Healthcare',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZS-4307',
                'module_name' => 'Digital Supply Chain',
                'mc' => '4',
                'level' => '4000'
            ],
            
            [
                'module_id' => 'ZS-4309',
                'module_name' => 'Emerging Technologies in Cybersecurity',
                'mc' => '4',
                'level' => '4000'
            ]
        ]);
    }
}
