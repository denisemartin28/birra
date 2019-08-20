<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('colors', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('color', 250);
          $table->timestamps();
      });
      Schema::create('beers', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('type', 25);
          $table->text('description');
          $table->string('IBUs', 10);
          $table->decimal('alcohol_content', 4, 2); // 99,99
          $table->unsignedBigInteger('color_id')->nullable();
          $table->foreign('color_id')->references('id')->on('colors');
          $table->string('image', 250);
          $table->timestamps();
      });
      Schema::table('users', function (Blueprint $table) {
          $table->unsignedBigInteger('beer_id')->nullable();
          $table->foreign('beer_id')->references('id')->on('beers');
      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->dropForeign('beer_id');
          $table->dropColumn('beer_id');
        });
        Schema::dropIfExists('beers');
        Schema::dropIfExists('colors');
    }
}
