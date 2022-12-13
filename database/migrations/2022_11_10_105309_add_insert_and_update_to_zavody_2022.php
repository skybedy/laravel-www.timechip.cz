<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInsertAndUpdateToZavody2022 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('zavody_2022', function (Blueprint $table) {
            $table->timestamp('insert', $precision = 0)->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('update', $precision = 0)->default(DB::raw('CURRENT_TIMESTAMP'));
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
