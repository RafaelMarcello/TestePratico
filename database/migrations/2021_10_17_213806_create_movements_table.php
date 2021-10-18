<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movements', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->integer('containerId')->unsigned();
            $table->enum('type', [
                'Embarque',
                'Descarga',
                'Gate in',
                'Gate out',
                'Reposicionamento',
                'Pesagem', 'Scanner'
            ]);
            $table->dateTime('start');
            $table->dateTime('end');

            $table->timestamps();

            $table->foreign('containerId')->references('id')->on('containers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movements');
    }
}
