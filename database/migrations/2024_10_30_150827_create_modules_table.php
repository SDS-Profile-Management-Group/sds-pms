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
        Schema::create('modules', function (Blueprint $table) {
            $table->string('module_id')->primary();
            $table->string('module_name');

            $table->tinyInteger('mc'); // Value: 2, 4, 8
            $table->integer('level'); // Value: 1000, 2000, 3000, 4000
        });

        Schema::create('module_belongs_to', function (Blueprint $table) {
            $table->string('module_id');
            $table->string('major_id');

            // Boolean column to indicate if the module is required in other majors as MC
            $table->boolean('is_required_in_other_majors')->default(false);
            
            // JSON column to list other majors where the module is required as MC
            $table->json('other_required_majors')->nullable();
            
            $table->enum('module_type',[
                'DC',
                'MC', 
                'MO', 
                'CB', 
                'Other Breadth'
            ]);
            
            $table->primary(['major_id', 'module_id']);
            $table->unique(['major_id','module_id']);
        });

        Schema::create('taken_modules', function (Blueprint $table) {
            $table->string('module_id');
            $table->string('student_id');

            $table->enum('assigned_md_type', [
                'DC', 
                'MC', 
                'MO', 
                'CB', 
                'Other Breadth'
            ]);
            $table->string('grade')->nullable();
            $table->boolean('status')->nullable();
            
            $table->primary(['module_id', 'student_id']);
            $table->unique(['module_id', 'student_id']);
        
            // $table->foreign('module_id')->references('module_id')->on('modules')->onDelete('cascade');
            $table->foreign('student_id')->references('student_username')->on('student_info')->onDelete('cascade');
        });

        Schema::create('modules_taught', function (Blueprint $table) {
            $table->string('module_id')->primary();
            $table->string('staff_id');
            
            $table->date('teaching_start_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules_taught');
        Schema::dropIfExists('taken_modules');
        Schema::dropIfExists('module_belongs_to');
        Schema::dropIfExists('modules');
    }
};
