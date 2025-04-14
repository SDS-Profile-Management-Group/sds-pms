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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->index();
            $table->boolean('is_announcement');   // true = Announcement, false = Personal Update
            $table->boolean('is_academic');       // true = Academic, false = Non-Academic
            $table->boolean('is_on_campus');      // true = On-campus, false = Off-campus
            $table->json('content');
            $table->timestamps();

            $table->foreign('user_id')->references('asg_username')
            ->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
