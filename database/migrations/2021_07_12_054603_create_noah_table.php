<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noahs', function (Blueprint $table) {
            $table->id();
            $table->string('SBU');
            $table->string('Depot');
            $table->string('Item');
            $table->string('UOM')->nullable();
            $table->string('Pallet');
            $table->string('Actual');
            $table->string('TP');
            $table->string('ItemType')->nullable();
            $table->string('Status')->nullable();
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
        Schema::dropIfExists('noah');
    }
}
