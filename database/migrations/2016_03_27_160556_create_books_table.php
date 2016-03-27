<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');
            $table->string('author');
            $table->string('pubdate');
            $table->string('publisher');
            $table->string('rating');
            $table->string('isbn');
            $table->string('author_intro');
            $table->string('image');
            $table->string('catalog');
            $table->string('summary');


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
        Schema::drop('books');
    }
}
