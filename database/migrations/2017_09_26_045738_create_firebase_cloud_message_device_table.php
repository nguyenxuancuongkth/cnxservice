<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirebaseCloudMessageDeviceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firebase_cloud_message_device', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('token_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('server_id')->nullable();
            $table->string('url')->nullable();
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
        Schema::dropIfExists('firebase_cloud_message_device');
    }
}
