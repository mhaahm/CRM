<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255);
            $table->unsignedBigInteger('client_id');
            $table->string('title',255);
            $table->string('first_name',255);
            $table->string('middle',255);
            $table->string('last_name',255);
            $table->string('gender',255);
            $table->string('occupation',255);
            $table->string('phone',255);
            $table->string('email',255);
            $table->dateTime('birth_day');
            $table->dateTime('notes');
            $table->foreign('client_id')->references('id')->on('clients');
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
        Schema::dropIfExists('contacts');
    }
}
