<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWelcomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('welcome', function (Blueprint $table) {
            $table->id();
            $table->integer('school_id')->unsigned();
            $table->string('auth_key', 16);
            $table->date('start_date')->nullable();
            $table->string('instructions', 4096)->nullable();
            $table->string('whatsapp_link', 256)->nullable();
            $table->string('facebook_link', 512)->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
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
        Schema::dropIfExists('welcome');
    }
}
