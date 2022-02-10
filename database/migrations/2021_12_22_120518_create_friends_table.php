<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friends', function (Blueprint $table) {
            $table->increments('id', true);
            $table->integer('requester_id')->unsigned();
            $table->integer('friend_id')->unsigned();
            $table->foreign('requester_id')->references('id')->on('profiles')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('friend_id')->references('id')->on('profiles')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('friends');
    }
}
