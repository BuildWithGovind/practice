<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('test_questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('test_id')->nullable();
            $table->enum('type', ['mcq', 'written'])->nullable();
            $table->text('question')->nullable();
            $table->json('options')->nullable();
            $table->text('correct_answer')->nullable();
            $table->text('explanation')->nullable();
            $table->integer('marks')->default(1);
            $table->dateTime('created_at')->useCurrent();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('test_questions');
    }
};
