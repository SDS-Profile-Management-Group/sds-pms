<?php

namespace Database\Seeders;
use Database\Seeders\ModulesTableSeeder;
use Database\Seeders\ModulesCategory;


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

        $this->call(ModuleCategory::class);
        $this->call([
            \Database\Seeders\Modules\CompulsoryDCModulesSeeder::class,

            \Database\Seeders\Modules\AIRoboticsModuleSeeder::class,
            \Database\Seeders\Modules\AppliedAIModuleSeeder::class,
            \Database\Seeders\Modules\ComputerScienceModuleSeeder::class,
            \Database\Seeders\Modules\CybersecurityModuleSeeder::class,
            \Database\Seeders\Modules\DataScienceModuleSeeder::class,

            \Database\Seeders\Modules\DYMKHeadstartModuleSeeder::class,
            \Database\Seeders\Modules\NonSDSModuleSeeder::class,
        ]);

    }
}
