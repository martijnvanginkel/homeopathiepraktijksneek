<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKostensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kostens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('paragraph');
            $table->string('behandeling01');
            $table->string('duur01');
            $table->string('prijs01');
            $table->string('behandeling02');
            $table->string('duur02');
            $table->string('prijs02');
            $table->string('behandeling03');
            $table->string('duur03');
            $table->string('prijs03');
            $table->string('behandeling04');
            $table->string('duur04');
            $table->string('prijs04');
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
        Schema::dropIfExists('kostens');
    }
}
