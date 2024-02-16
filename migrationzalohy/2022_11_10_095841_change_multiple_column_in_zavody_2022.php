<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeMultipleColumnInZavody2022 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('zavody_2022', function (Blueprint $table) {
            $table->boolean('online_results')->nullable()->default('NULL')->change();
            $table->boolean('nove_vysledky')->nullable()->default('NULL')->change();
            $table->boolean('prihlasky')->nullable()->change()->default('NULL');
            $table->boolean('zverejneni')->nullable()->default('1')->change();
            $table->boolean('limit_casu')->nullable()->change()->default('NULL');
            $table->boolean('ruzny_pocet_casu')->nullable()->default('NULL')->change();
            $table->boolean('online_results_2')->nullable()->default('NULL')->change();
            $table->boolean('online_results_3')->nullable()->default('NULL')->change();
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
