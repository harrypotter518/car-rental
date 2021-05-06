<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            
            $table->unsignedBigInteger('menu_type_id')->nullable();
            $table->foreign('menu_type_id')->references('id')->on('menu_types')->onDelete('cascade');
            $table->unsignedBigInteger('post_id')->nullable();
            $table->foreign('post_id')->references('id')->on('modules_data')->onDelete('cascade');
            $table->string('order')->nullable();
            $table->integer('parent_id')->nullable();
            $table->enum('status', ['active', 'blocked'])->default('active');
            $table->enum('menu_is', ['external', 'internal'])->default('internal');
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
        Schema::dropIfExists('menus');
    }
}
