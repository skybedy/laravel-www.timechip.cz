<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZavody2022sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zavody_2022', function (Blueprint $table) {
            $table->id();
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
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zavody_2022');
    }
}
