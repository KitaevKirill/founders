<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->enum('category1', ['on', 'off', ''])->default('off');
            $table->enum('category2', ['on', 'off', ''])->default('off');
            $table->enum('category3', ['on', 'off', ''])->default('off');
            $table->enum('category4', ['on', 'off', ''])->default('off');
            $table->enum('category5', ['on', 'off', ''])->default('off');
            $table->enum('category6', ['on', 'off', ''])->default('off');
            $table->enum('category7', ['on', 'off', ''])->default('off');
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
        Schema::dropIfExists('subscriptions');
    }
}
