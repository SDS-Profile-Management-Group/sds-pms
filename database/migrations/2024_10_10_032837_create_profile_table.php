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
            $table->string('user_id')->unique()->primary(); // Primary Key, connects to user_id at users table
            $table->string('full_name');
            $table->string('contact_number')->nullable(); 
            $table->string('alt_email')->nullable();
        });
        
        // Schema::create('student_profile', function(Blueprint $table){
        //     $table->string('student_id')->unique()->primary(); // Primary Key, connects to user_id at users table
        //     $table->string('student_full_name');
        //     $table->string('student_intake_batch');
        //     $table->string('student_type');
        // });

        // Schema::create('staff_profile', function(Blueprint $table){
        //     $table->string('staff_id')->unique()->primary(); // Primary Key, connects to user_id at users table
        //     $table->string('staff_full_name');
        //     $table->string('staff_qualification');
        //     $table->string('staff_type');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profile');
        // Schema::dropIfExists('student_profile');
        // Schema::dropIfExists('staff_profile');
    }
};
