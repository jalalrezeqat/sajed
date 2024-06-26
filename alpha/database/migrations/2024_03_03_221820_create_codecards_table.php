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
        Schema::create('codecards', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('courses');
            $table->string('user')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('courses_id')->nullable();
            $table->date('startcode');
            $table->date('endcode');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('codecards');
    }
};
