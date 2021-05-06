<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('term')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->tinyInteger('is_slug')->default(0)->nullable();
            $table->tinyInteger('is_menu')->default(0)->nullable();
            $table->tinyInteger('is_description')->default(0)->nullable();
            $table->tinyInteger('is_image')->default(0)->nullable();
            $table->tinyInteger('is_seo')->default(0)->nullable();
            $table->tinyInteger('category')->default(0)->nullable();
            $table->integer('parent_id')->nullable();
            $table->integer('category_module_id')->nullable();
            $table->tinyInteger('multiple_category')->default(0)->nullable();
            $table->tinyInteger('tags')->default(0)->nullable();
            $table->string('extra_fields')->nullable();
            $table->string('extra_field_title_1')->nullable();
            $table->string('extra_field_title_2')->nullable();
            $table->string('extra_field_title_3')->nullable();
            $table->string('extra_field_title_4')->nullable();
            $table->string('extra_field_title_5')->nullable();
            $table->string('extra_field_title_6')->nullable();
            $table->string('extra_field_title_7')->nullable();
            $table->string('extra_field_title_8')->nullable();
            $table->string('extra_field_title_9')->nullable();
            $table->string('extra_field_title_10')->nullable();
            $table->string('extra_field_title_11')->nullable();
            $table->string('extra_field_title_12')->nullable();
            $table->string('extra_field_title_13')->nullable();
            $table->string('extra_field_title_14')->nullable();
            $table->string('extra_field_title_15')->nullable();
            $table->string('thumbnail_height')->nullable();
            $table->string('thumbnail_width')->nullable();
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
        Schema::dropIfExists('modules');
    }
}
