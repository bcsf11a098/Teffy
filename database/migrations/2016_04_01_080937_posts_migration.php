<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PostsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('what')->nullable();
            $table->string('why')->nullable();
            $table->longText('discription')->nullable();
            $table->string('price')->nullable();
            $table->string('type')->nullable();
            $table->string('category')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->integer("user_id")->nullable();
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
        Schema::drop('posts');
    }
}
