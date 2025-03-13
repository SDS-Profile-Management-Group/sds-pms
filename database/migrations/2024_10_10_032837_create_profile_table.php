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
            $table->enum('salutations', ['Awang', 'Dayang', 'Mr.', 'Mrs.', 'Doctor', 'Professor'])->nullable(); //? Is this actually needed?
            
            $table->string('alt_email')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('asg_username')
            ->on('users')->onDelete('cascade');
        });
        
        Schema::create('student_info', function (Blueprint $table) {
            $table->string('student_username')->primary();
            
            $table->string('student_intake_batch')->nullable();
            $table->string('student_nationality')->nullable();
            $table->double('cgpa')->nullable();

            $table->string('major_id')->nullable(); //* TO identify what student belong to what major (FK)
            $table->timestamps();
            
            $table->foreign('student_username')->references('username')
            ->on('user_profile')->onDelete('cascade');

            $table->foreign('major_id')->references('major_id')
            ->on('sds_major')->onDelete('cascade');
        });

        Schema::create('staff_info', function (Blueprint $table) {
            $table->string('staff_username')->primary();
            
            $table->string('staff_type');
            $table->timestamps();
            
            $table->foreign('staff_username')->references('username')
            ->on('user_profile')->onDelete('cascade'); 
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff_info');
        Schema::dropIfExists('student_info');
        Schema::dropIfExists('user_profile');
    }
};
