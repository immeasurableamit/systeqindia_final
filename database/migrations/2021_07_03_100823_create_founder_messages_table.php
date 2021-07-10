<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFounderMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('founder_messages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('job');
            $table->string('description');
            $table->string('founder_message_image')->nullable();
            $table->timestamps();
            $table->integer('created_by')->unsigned()->default(0);
            $table->integer('updated_by')->unsigned()->default(0);
            $table->softDeletes();
            $table->integer('deleted_by')->unsigned()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('founder_messages');
    }
}
