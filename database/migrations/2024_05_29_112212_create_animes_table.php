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
        Schema::create(
            'animes', function (Blueprint $table) {
                $table->unsignedBigInteger('id')->primary();
                $table->string('title', 255);
                $table->unsignedInteger('category_id');
                $table->string('cover_image', 255);
                $table->unsignedInteger('total_episodes');
                $table->unsignedInteger('current_episode')->default(0);
                $table->unsignedBigInteger('user_id');
                $table->foreign('user_id')->references('id')->on('users');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animes');
    }
};
