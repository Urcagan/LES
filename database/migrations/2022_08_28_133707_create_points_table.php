<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string( 'NamePoint', 50)->unique();
            $table->string( 'Description', 120)->nullable();
            $table->string( 'EUDESC', 10);
            $table->integer( 'PVEUHI');
            $table->integer( 'PVEULO');
            $table->integer('UnitID');
            $table->foreignId('units_id')->constrained();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('points');
    }
};
