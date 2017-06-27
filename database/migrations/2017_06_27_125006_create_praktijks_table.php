<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePraktijksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
        Schema::create('praktijks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('paragraphOne')->nullable();
            $table->string('photoText')->nullable();
            $table->text('paragraphTwo')->nullable();
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
        Schema::dropIfExists('praktijks');
    }
}
