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
        Schema::create('Parkings', function (Blueprint $table) {
            $table->id();
            $table->string("numPark",100)->unique();
            $table->string("nomPark");
            $table->string("localisation");
            $table->integer("capacité");
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
        Schema::dropIfExists('Parkings');
    }
};
