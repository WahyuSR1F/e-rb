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
        Schema::create('target_anggarans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('rencana_aksi_id');
            $table->foreign('rencana_aksi_id')->references('id')->on('rencana_aksis');
            $table->integer('tw_1')->nullable();
            $table->integer('tw_2')->nullable();
            $table->integer('tw_3')->nullable();
            $table->integer('tw_4')->nullable();
            $table->integer('jumlah')->nullable();
            $table->string('kooridnator')->nullable();
            $table->string('pelaksana')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('target_anggarans');
    }
};
