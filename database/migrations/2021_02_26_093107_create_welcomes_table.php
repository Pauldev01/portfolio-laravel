<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWelcomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('welcomes', function (Blueprint $table) {
            $table->id();
            $table->string('h1hero');
            $table->string('h2hero');
            $table->string('ahero');
            $table->string('imghero');

            $table->string('spanservice');
            $table->string('h2service');
            $table->string('pservice');

            $table->string('a1service');
            $table->string('p1service');

            $table->string('a2service');
            $table->string('p2service');

            $table->string('a3service');
            $table->string('p3service');


            $table->string('h3cta');
            $table->string('pcta');
            $table->string('acta');
            
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
        Schema::dropIfExists('welcomes');
    }
}
