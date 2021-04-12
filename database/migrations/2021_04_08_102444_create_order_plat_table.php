<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderPlatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_plat', function (Blueprint $table) {

            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')
                ->references('id')
                ->on('orders')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->unsignedBigInteger('plat_id');
            $table->foreign('plat_id')
                ->references('id')
                ->on('plats')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_plat');
    }
}
