<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('skill_id')->nullable();
            $table->enum('level', ['beginner', 'intermediate', 'expert'])->nullable();
            $table->enum('type', ['mcq', 'real'])->nullable();
            $table->boolean('is_paid')->default(false);
            $table->integer('required_xp')->default(0);
            $table->integer('xp_reward')->default(50);
            $table->integer('pass_percentage')->default(70);
            $table->integer('duration_minutes')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
