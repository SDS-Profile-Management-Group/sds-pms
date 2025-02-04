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
            // * Seeding purposes
            $table->string('module_id')->primary();
            $table->string('module_name');

            // $table->timestamps(); //? Not sure if needed as there is a seeder

        });

        Schema::create('module_belongs_to', function (Blueprint $table) {
            $table->string('major_id')->primary();
            $table->string('module_id');
            
            $table->enum('module_type',['DC','MC', 'MO']);
            $table->tinyInteger('mc');
            
            $table->timestamps();
        });

        Schema::create('taken_modules', function (Blueprint $table) {
            $table->string('module_id');
            $table->string('student_id');

            $table->enum('chosen_mod_classification',['DC','MC', 'MO', 'Breadth']);

            $table->string('grade')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();

            
            $table->primary(['module_id', 'student_id']);
            $table->unique(['module_id','student_id']);

            $table->foreign('module_id')->references('module_id')->on('modules')->onDelete('cascade');
            $table->foreign('student_id')->references('student_username')->on('student_info')->onDelete('cascade');
        });

        Schema::create('modules_taught', function (Blueprint $table) {
            $table->string('module_id')->primary();
            $table->string('staff_id');
            
            $table ->date('teaching_start_date');
            $table->timestamps();
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
