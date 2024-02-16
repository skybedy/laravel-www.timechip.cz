<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropAndCreateDelkaKolaInZavody2022 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('zavody_2022', function (Blueprint $table) {
            $table->dropColumn('delka_kola');
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
