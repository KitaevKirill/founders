<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostBufersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_bufers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('author_id');
            $table->enum('category', ['Category 1', 'Category 2'])->nullable();
            $table->string('title');
            $table->string('seo_title')->nullable();
            $table->text('excerpt');
            $table->mediumText('body');
            $table->string('slug')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->enum('status', ['PUBLISHED', 'DRAFT', 'PENDING'])->default('PUBLISHED');
            $table->integer('is_bufer')->default('1');
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
        Schema::dropIfExists('post_bufers');
    }
}
