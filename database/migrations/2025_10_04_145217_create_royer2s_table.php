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
        Schema::create('royer2s', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', length: 100)->nullable();
            $table->string('nombres', length: 100);
            $table->string('pri_ape', length: 100);
            $table->string('seg_ape', length: 100);
            $table->string('dni', length: 8)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('royer2s');
    }
};
