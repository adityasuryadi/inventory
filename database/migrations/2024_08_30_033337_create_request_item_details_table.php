<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestItemDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_item_details', function (Blueprint $table) {
            $table->id();
            $table->uuid('product_id')->nullable(false);
            $table->string('product_name',255)->nullable(false);
            $table->uuid('request_item_id')->nullable(false);
            $table->integer('quantity')->nullable(false);
            $table->text('location')->nullable(false);
            $table->string('unit',255)->nullable(false);
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
        Schema::dropIfExists('request_item_details');
    }
}
