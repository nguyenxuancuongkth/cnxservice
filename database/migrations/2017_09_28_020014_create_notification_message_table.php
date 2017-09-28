<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notification_message', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('body')->nullable();
            $table->string('icon')->nullable();
            $table->string('url_action')->nullable();
            $table->string('push_time')->nullable();
            $table->integer('status')->nullable();
            $table->integer('device_id')->nullable();
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
        Schema::dropIfExists('notification_message');
    }
}
