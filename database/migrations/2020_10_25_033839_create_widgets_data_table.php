<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWidgetsDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('widgets_data', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->unsignedBigInteger('widget_id')->unsigned();
            $table->foreign('widget_id')->references('id')->on('widgets')->onDelete('cascade');
            $table->longText('description')->nullable();
            $table->string('extra_field_1')->nullable();
            $table->string('extra_field_2')->nullable();
            $table->string('extra_field_3')->nullable();
            $table->string('extra_field_4')->nullable();
            $table->string('extra_field_5')->nullable();
            $table->string('extra_field_6')->nullable();
            $table->string('extra_field_7')->nullable();
            $table->string('extra_image_1')->nullable();
            $table->string('extra_image_2')->nullable(); 
            $table->longText('bullets')->nullable();
            $table->tinyInteger('radio_button_1')->default(0)->nullable();
            $table->tinyInteger('radio_button_2')->default(0)->nullable();
            $table->tinyInteger('radio_button_3')->default(0)->nullable();
            $table->enum('status', ['active', 'blocked'])->default('active');
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
        Schema::dropIfExists('widgets_data');
    }
}
