<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); 
            $table->string('asg_username')->unique(); // Collects like 21B6027 or fname.lname
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable(); // To be used
            $table->string('password');
            $table->enum('user_type', ['student', 'staff']); // To differentiate between students and staff
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

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
            ->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profile');
        Schema::dropIfExists('users');
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('password_reset_tokens');
    }
};
