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
        Schema::create('user_profile', function(Blueprint $table){
            $table->string('username')->primary();

            $table->string('full_name')->nullable();
            $table->string('contact_number')->nullable();
            $table->date('dob')->nullable();
            $table->string('role');
            $table->string('alt_email')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('asg_username')
            ->on('users')->onDelete('cascade');
        });
        
        Schema::create('student_info', function (Blueprint $table) {
            $table->string('student_username')->primary();
            
            $table->string('student_intake_batch');
            $table->string('student_type');
            $table->timestamps();
            
            $table->foreign('student_username')->references('username')
            ->on('user_profile')->onDelete('cascade');
        });

        Schema::create('staff_info', function (Blueprint $table) {
            $table->string('staff_username')->primary();
            
            $table->string('staff_qualification');
            $table->string('staff_type');
            $table->timestamps();
            
            $table->foreign('staff_username')->references('username')
            ->on('user_profile')->onDelete('cascade'); 
        });
    
        // Schema::create('staff_profile', function(Blueprint $table){
        //     $table->string('staff_username')->unique()->primary();
            
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP TABLE IF EXISTS "user_profile" CASCADE');
        // Schema::dropIfExists('user_profile');
        Schema::dropIfExists('student_profile');
        // Schema::dropIfExists('staff_profile');
    }
};
