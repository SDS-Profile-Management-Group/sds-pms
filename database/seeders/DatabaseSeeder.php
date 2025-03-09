<?php

namespace Database\Seeders;
use Database\Seeders\Modules\CompulsoryDCModulesSeeder;
use Database\Seeders\Modules\AIRoboticsModuleSeeder;
use Database\Seeders\Modules\AppliedAIModuleSeeder;
use Database\Seeders\Modules\ComputerScienceModuleSeeder;
use Database\Seeders\Modules\CybersecurityModuleSeeder;
use Database\Seeders\Modules\DataScienceModuleSeeder;
use Database\Seeders\Modules\DYMKHeadstartModuleSeeder;
use Database\Seeders\Modules\NonSDSModuleSeeder;

use Database\Seeders\Category\CommonMajorSeeder;
use Database\Seeders\Category\AIRoboMajorSeeder;

use Database\Seeders\User\StudentSeed;


use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Module Seeders
        $this->call([
            CompulsoryDCModulesSeeder::class,
            AIRoboticsModuleSeeder::class,
            AppliedAIModuleSeeder::class,
            ComputerScienceModuleSeeder::class,
            CybersecurityModuleSeeder::class,
            DataScienceModuleSeeder::class,
            DYMKHeadstartModuleSeeder::class,
            NonSDSModuleSeeder::class,
        ]);
        
        // Category Seeders
        $this->call([
            AIRoboMajorSeeder::class,
            CommonMajorSeeder::class,
        ]);
        
        // User Seeders
        $this->call([
            StudentSeed::class,
        ]);
        
    }
}
