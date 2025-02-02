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
            // $table->tinyInteger('mc');
            $table->timestamps(); //? Not sure if needed as there is a seeder
        });

        Schema::create('modules_taken', function (Blueprint $table) {
            $table->string('module_id');
            $table->string('student_id');

            $table->enum('module_type',['DC','MC', 'MO', 'Breadth']);

            $table->string('status')->nullable();
            $table->string('semester')->nullable();
            $table->timestamps();

            
            $table->primary(['module_id', 'student_id']);
            $table->unique(['module_id','student_id']);

            $table->foreign('student_id')->references('student_username')
                ->on('student_info')->onDelete('cascade');
        });

        Schema::create('modules_taught', function (Blueprint $table) {
            $table->string('module_id')->primary();
            $table->string('staff_id');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
        Schema::dropIfExists('modules_taken');
        Schema::dropIfExists('modules_taught');
    }
};
