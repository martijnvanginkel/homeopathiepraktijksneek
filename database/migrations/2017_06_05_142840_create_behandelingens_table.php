<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBehandelingensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('behandelingens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('paragraphOne')->nullable();

            $table->string('blockOneTitle')->nullable();
            $table->text('blockOneInfo')->nullable();
            $table->string('blockTwoTitle')->nullable();
            $table->text('blockTwoInfo')->nullable();
            $table->string('blockThreeTitle')->nullable();
            $table->text('blockThreeInfo')->nullable();
            $table->string('blockFourTitle')->nullable();
            $table->text('blockFourInfo')->nullable();
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
        Schema::dropIfExists('behandelingens');
    }
}
