<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->unsignedBigInteger('frontuser_id')->nullable();
            $table->text('cart')->nullable();
            $table->string('address')->nullable();
            $table->string('name')->nullable();
            $table->string('payment_id')->nullable();
            $table->float('amount');
            $table->string('currency');
            $table->string('payment_status');
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
        Schema::dropIfExists('orders');
    }
};
