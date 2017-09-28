<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationFirebaseServerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notification_firebase_server', function (Blueprint $table) {
            $table->increments('id');
            $table->string('apiKey')->nullable();
            $table->string('authDomain')->nullable();
            $table->string('databaseURL')->nullable();
            $table->string('projectId')->nullable();
            $table->string('storageBucket')->nullable();
            $table->string('messagingSenderId')->nullable();
            $table->string('serverKey')->nullable();
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
        Schema::dropIfExists('notification_firebase_server');
    }
}
