<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookorders', function (Blueprint $table) {

            $table->unsignedInteger('book_id');
            $table->unsignedInteger('order_id');
            $table->unsignedInteger('amount');
            $table->unique(['book_id', 'order_id']);
            $table->timestamps();
            $table->foreign('book_id')
                ->references('id')->on('books')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('order_id')
                ->references('id')->on('orders')
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
        Schema::dropIfExists('bookorders');
    }
}
