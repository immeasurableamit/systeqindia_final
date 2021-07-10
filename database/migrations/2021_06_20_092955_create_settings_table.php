<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('short_description')->nullable();
            $table->string('copyright')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('address_map')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('site_name')->nullable();
            $table->string('flash_message')->nullable();
            $table->string('marquee_message')->nullable();
            $table->string('page_title')->nullable();
            $table->string('site_description')->nullable();
            $table->string('site_keywords')->nullable();
            $table->string('facebook')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('skype')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('favicon')->nullable();
            $table->string('admin_logo')->nullable();
            $table->string('admin_small_logo')->nullable();
            $table->string('site_logo')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
