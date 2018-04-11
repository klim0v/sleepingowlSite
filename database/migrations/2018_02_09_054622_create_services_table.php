<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->nullable();
            $table->integer('lft')->nullable();
            $table->integer('rgt')->nullable();
            $table->integer('depth')->nullable();
            $table->integer('order')->default(0);
            $table->string('title');
            $table->string('name');
            $table->string('heading')->comment('Заголовок H1')->nullable();
            $table->string('meta_description')->comment('Meta description')->nullable();
            $table->string('meta_title')->comment('Meta title')->nullable();
            $table->string('slug')->unique();
            $table->text('annotation');
            $table->text('description');
            $table->string('icon');
            $table->string('cover');
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
        Schema::dropIfExists('services');
    }
}
