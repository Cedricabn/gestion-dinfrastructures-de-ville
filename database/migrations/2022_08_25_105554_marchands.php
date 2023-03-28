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
        Schema::create('Marchands', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("prenom");
            $table->integer("numstand")->unique();
            $table->string("nummarché",100);
            $table->foreign("nummarché")->references('idmarché')->on('Marchés');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          
        Schema::table("Marchands", function(Blueprint $table)
    { $table->dropForeign(["nummarché"]);}
    );
        Schema::dropIfExists('Marchands');
    }
};
