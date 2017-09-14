<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bannerTitle');
            $table->string('bannerSubtitle');
            $table->string('title');
            $table->text('paragraphOne')->nullable();
            $table->string('titleTwo')->nullable();
            $table->text('paragraphTwo')->nullable();
            $table->string('footerTitle')->nullable();
            $table->text('footerText')->nullable();
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
        Schema::dropIfExists('indices');
    }
}
