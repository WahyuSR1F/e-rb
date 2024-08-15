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
        Schema::create('rencana_aksis', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('permasalahan_id');
            $table->foreign('permasalahan_id')->references('id')->on('permasalahans');
            $table->text('rencana_aksi')->nullable();
            $table->text('indikator')->nullable();
            $table->string('satuan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rencana_aksis');
    }
};
