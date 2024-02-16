<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZavodyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       for($i = 2020;$i <= 2023;$i++)
       {
        Schema::create('zavody_'.$i, function (Blueprint $table) {
            $table->increments('id_zavodu');
            $table->unsignedTinyInteger('typ_zavodu');
            $table->string('nazev_zavodu', 100)->nullable();
            $table->string('kod_zavodu', 100)->nullable();
            $table->unsignedTinyInteger('online_results')->default('0');
            $table->unsignedTinyInteger('nove_vysledky')->default('0');
            $table->unsignedTinyInteger('prihlasky')->default('0');
            $table->unsignedTinyInteger('zverejneni')->default('1');
            $table->string('misto_zavodu', 100)->nullable();
            $table->date('datum_zavodu')->nullable();
            $table->date('datum_zavodu_konec')->nullable();
            $table->unsignedTinyInteger('pocet_casu')->nullable()->default('1');
            $table->unsignedTinyInteger('limit_casu')->default('0');
            $table->unsignedTinyInteger('ruzny_pocet_casu')->default('0');
            $table->unsignedTinyInteger('pocet_podzavodu')->nullable()->default('1');
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
            $table->timestamps();
        });
       }
       
       
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zavody_2023');
    }
}
