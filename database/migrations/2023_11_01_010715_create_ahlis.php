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
        Schema::create('ahlis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ic')->unique();
            $table->string('email')->unique();
            $table->string('hubungan', 2)->nullable();
            $table->string('jantina', 2)->nullable();
            $table->string('dob', 11)->nullable();
            $table->string('telefon', 12)->nullable();
            $table->integer('rumah_id')->nullable();
            $table->integer('kir_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ahlis');
    }
};
