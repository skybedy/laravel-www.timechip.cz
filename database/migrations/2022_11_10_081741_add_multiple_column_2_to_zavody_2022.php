<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultipleColumn2ToZavody2022 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('zavody_2022', function (Blueprint $table) {
            $table->unsignedInteger('startovni_cas')->default('0');
            $table->double('delka_kola',10,2)->default('0');
            $table->boolean('autoreading_input')->nullable();
            $table->boolean('autoreading_output')->nullable();
            $table->boolean('pripocet_24h')->nullable();
            $table->boolean('pocet_poctu_casu')->nullable();
            $table->unsignedTinyInteger('den')->default('1');
            $table->unsignedInteger('id_2')->nullable();
            $table->unsignedInteger('id_cts')->nullable();
            $table->boolean('cipy_prevodni_tabulka')->nullable();
            $table->string('reditel_zavodu', 100)->nullable();
            $table->string('casomeric', 100)->nullable();
            $table->string('jury', 100)->nullable();
            $table->boolean('staticke_poradi_podzavodu')->nullable();
            $table->boolean('stejna_startovni_cisla')->nullable();
            $table->string('poznamka')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('zavody_2022', function (Blueprint $table) {
            //
        });
    }
}
