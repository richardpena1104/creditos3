<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateDeliveryDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('delivery_details', function (Blueprint $table) {
            $table->unsignedInteger('product_id');
            
            $table->foreign('product_id')
              ->references('id')->on('products')
              ->onDelete('cascade');
        });

    }
}
