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
        Schema::create('playbacks', function (Blueprint $table) {
            $table->id();
            $table->string('idofstudant')->nullable();
            $table->string('idlesson')->nullable();
            $table->string('idcoures')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('playbacks');
    }
};
