<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemporaryBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temporary_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('car_name')->nullable();
            $table->string('pick_up')->nullable();
            $table->string('pick_up_lat')->nullable();
            $table->string('pick_up_lng')->nullable();
            $table->string('pick_up_datetime')->nullable();

            $table->string('drop_off')->nullable();
            $table->string('drop_off_lat')->nullable();
            $table->string('drop_off_lng')->nullable();
            $table->string('drop_off_datetime')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->enum('status', ['seen', 'unseen'])->default('unseen');
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
        Schema::dropIfExists('temporary_bookings');
    }
}
