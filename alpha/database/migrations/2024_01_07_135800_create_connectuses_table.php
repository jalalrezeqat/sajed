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
        Schema::create('Connectus', function (Blueprint $table) {
            $table->id();
            $table->string('firestname');
            $table->string('lastname');
            $table->string('email');
            $table->string('phone');
            $table->string('note');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Connectus');
    }
};
