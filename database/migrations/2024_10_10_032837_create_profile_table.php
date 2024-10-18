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
            $table->string('username')->primary(); // Set 'username' as the primary key
            $table->foreign('username')->references('asg_username')
            ->on('users')->onDelete('cascade'); // Foreign key to 'users' table

            $table->string('full_name')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('alt_email')->nullable();
            $table->timestamps();
        });
        
        Schema::create('student_profile', function (Blueprint $table) {
            $table->string('student_username')->unique()->primary(); // This is the primary key for the student profile
            $table->string('student_intake_batch');
            $table->string('student_type');
            $table->timestamps();
        });

        // Schema::create('staff_profile', function(Blueprint $table){
        //     $table->string('staff_username')->unique()->primary();
        //     $table->string('staff_qualification');
        //     $table->string('staff_type');
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
