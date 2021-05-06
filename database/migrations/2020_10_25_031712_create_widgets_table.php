<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWidgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('widgets', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->unsignedBigInteger('widget_page_id')->unsigned();
            $table->foreign('widget_page_id')->references('id')->on('widget_pages')->onDelete('cascade');
            $table->longText('is_description')->nullable();
            $table->longText('extra_fields')->nullable();
            $table->string('extra_field_title_1')->nullable();
            $table->string('extra_field_title_2')->nullable();
            $table->string('extra_field_title_3')->nullable();
            $table->string('extra_field_title_4')->nullable();
            $table->string('extra_field_title_5')->nullable();
            $table->string('extra_field_title_6')->nullable();
            $table->string('extra_field_title_7')->nullable();
            $table->string('is_extra_image_title_1')->nullable();
            $table->string('is_bullets')->nullable();
            $table->string('extra_image_title_1')->nullable();
            $table->string('extra_image_1_height')->nullable();
            $table->string('extra_image_1_width')->nullable();
            $table->string('is_extra_image_title_2')->nullable();
            $table->string('extra_image_title_2')->nullable();
            $table->string('extra_image_2_height')->nullable();
            $table->string('extra_image_2_width')->nullable();
            $table->string('radio_buttons')->nullable();
            $table->string('radio_button_title_1')->nullable();
            $table->string('radio_button_title_2')->nullable();
            $table->string('radio_button_title_3')->nullable();
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
        Schema::dropIfExists('widgets');
    }
}
