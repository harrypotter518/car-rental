<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules_data', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->unsignedBigInteger('module_id')->unsigned();
            $table->foreign('module_id')->references('id')->on('modules')->onDelete('cascade');
            $table->longText('description')->nullable();
            $table->integer('category')->nullable();
            $table->string('category_ids')->nullable();
            $table->string('tag_ids')->nullable();
            $table->string('extra_field_1')->nullable();
            $table->string('extra_field_2')->nullable();
            $table->string('extra_field_3')->nullable();
            $table->string('extra_field_4')->nullable();
            $table->string('extra_field_5')->nullable();
            $table->string('extra_field_6')->nullable();
            $table->string('extra_field_7')->nullable();
            $table->string('extra_field_8')->nullable();
            $table->string('extra_field_9')->nullable();
            $table->string('extra_field_10')->nullable();
            $table->string('extra_field_11')->nullable();
            $table->string('extra_field_12')->nullable();
            $table->string('extra_field_13')->nullable();
            $table->string('extra_field_14')->nullable();
            $table->string('extra_field_15')->nullable();
            $table->string('image')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();
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
        Schema::dropIfExists('modules_data');
    }
}
