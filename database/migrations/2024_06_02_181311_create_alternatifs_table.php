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
        Schema::create('alternatifs', function (Blueprint $table) {
            $table->id();
            $table->char('alternatif');
            $table->integer('kondisi_rumah');
            $table->integer('kondisi_air');
            $table->integer('penghasilan');
            $table->integer('tegangan_listrik');
            $table->integer('pendidikan');
            $table->integer('pekerjaan');
            $table->integer('sumber_air');
            $table->integer('bahan_bakar_memasak');
            $table->integer('umur');
            $table->integer('tanggungan');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alternatifs');
    }
};