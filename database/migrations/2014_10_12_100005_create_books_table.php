<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('name');
            $table->string('catagory');
            $table->unsignedInteger('author_id');
            $table->unsignedInteger('publisher_id');
            $table->unsignedInteger('price');
            $table->string('image');
            $table->timestamps();
            $table->foreign('author_id')
                ->references('id')->on('authors')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('publisher_id')
                ->references('id')->on('publishers')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
