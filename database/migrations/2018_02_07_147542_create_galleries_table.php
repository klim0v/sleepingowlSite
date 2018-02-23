<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('heading')->comment('Заголовок H1')->nullable();
            $table->string('meta_description')->comment('Meta description')->nullable();
            $table->string('meta_title')->comment('Meta title')->nullable();
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('cover');
            $table->text('images');
            $table->boolean('published')->index();
            $table->boolean('on_main');
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
        Schema::dropIfExists('galleries');
    }
}
