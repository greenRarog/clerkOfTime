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
        Schema::create('timeschemas', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time("start");
            $table->time("end");
            $table->integer("value");
            $table->integer("separator");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timeschemas');
    }
};
