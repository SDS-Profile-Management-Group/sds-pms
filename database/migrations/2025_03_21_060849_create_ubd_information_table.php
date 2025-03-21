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
        Schema::create('staff_info', function (Blueprint $table) {
            $table->string('staff_username')->primary();

            $table->json('staff_type')->nullable(); 
            $table->timestamps();
            
            $table->foreign('staff_username')->references('username')
            ->on('user_profile')
            ->onDelete('cascade'); 
        });

        Schema::create('sds_major', function (Blueprint $table) {
            $table->string('major_id')->primary();
            $table->string('major_name');
            $table->string('leading_staff')->nullable();
        
            // Define the foreign key relationship
            $table->foreign('leading_staff')->references('staff_username')
                ->on('staff_info')
                ->onDelete('set null'); // If a staff member is deleted, set the leading_staff to NULL
        });

        DB::table('sds_major')->insert([
            ['major_id' => 'ZA', 'major_name' => 'Artificial Intelligence & Robotics'],
            ['major_id' => 'ZC', 'major_name' => 'Computer Science'],
            ['major_id' => 'ZD', 'major_name' => 'Data Science'],
            ['major_id' => 'ZI', 'major_name' => 'Applied Artificial Intelligence'],
            ['major_id' => 'ZS', 'major_name' => 'Cyber Security & Forensics'],
            ['major_id' => 'ZZ', 'major_name' => 'Degree Major'],
            ['major_id' => 'XX', 'major_name' => 'Breadth Modules'],
        ]);

        Schema::create('student_info', function (Blueprint $table) {
            $table->string('student_username')->primary();
            
            $table->string('student_intake_batch')->nullable();
            $table->string('student_nationality')->nullable();
            $table->json('cgpa')->nullable();

            $table->string('major_id')->nullable(); //* TO identify what student belong to what major (FK)
            $table->timestamps();
            
            $table->foreign('student_username')->references('username')
            ->on('user_profile')->onDelete('cascade');

            $table->foreign('major_id')->references('major_id')
            ->on('sds_major')
            ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_info');
        Schema::dropIfExists('sds_major');
        Schema::dropIfExists('staff_info');

    }
};
