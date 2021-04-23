<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('deliveryDate');
            $table->unsignedTinyInteger('quantity');
            $table->text('commentary', 2000)->nullable();
            $table->timestamps();
            $table->integer('timeStamp');
            $table->integer('plateID');
            $table->integer('userID');
/*             $table->unsignedBigInteger('user_id');  // relation avec de order avec user
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict'); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
