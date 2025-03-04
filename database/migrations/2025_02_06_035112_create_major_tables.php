<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sds_major', function (Blueprint $table) {
            $table->string('major_id')->primary();
            $table->string('major_name');
        });

        // TODO: Create insert into table 'sds_major'

        DB::table('sds_major')->insert([
            ['major_id' => 'ZA', 'major_name' => 'Artificial Intelligence & Robotics'],
            ['major_id' => 'ZC', 'major_name' => 'Computer Science'],
            ['major_id' => 'ZD', 'major_name' => 'Data Science'],
            ['major_id' => 'ZI', 'major_name' => 'Applied Artificial Intelligence'],
            ['major_id' => 'ZS', 'major_name' => 'Cyber Security & Forensics'],
            ['major_id' => 'ZZ', 'major_name' => 'Degree Major'],
            ['major_id' => 'XX', 'major_name' => 'Breadth Modules'],
        ]);

        // Schema::create('student_enrollment', function (Blueprint $table){

        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sds_major');
    }
};
