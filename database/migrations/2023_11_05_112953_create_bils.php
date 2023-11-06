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
        Schema::create('bils', function (Blueprint $table) {
            $table->id();
            $table->integer('rumah_id')->nullable();
            $table->integer('caj')->nullable();
            $table->integer('tunggakan')->nullable();
            $table->string('tarikh_bil')->nullable();
            $table->string('tarikh_dibayar')->nullable();
            $table->smallInteger('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bils');
    }
};
