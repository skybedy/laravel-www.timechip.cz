<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTypZavoduToZavody2022Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('zavody_2021s', function (Blueprint $table) {
            $table->unsignedTinyInteger('typ_zavodu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('zavody_2021s', function (Blueprint $table) {
            $table->dropColumn('typ_zavodu');
        });
    }
}
