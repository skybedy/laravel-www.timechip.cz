<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypZavodusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typ_zavodu', function (Blueprint $table) {
            $table->id('id_typ_zavodu');
            $table->string('typ_zavodu');
            $table->string('icon')->nullable();
            $table->string('poznamka')->nullable();
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
        Schema::dropIfExists('typ_zavodu');
    }
}
