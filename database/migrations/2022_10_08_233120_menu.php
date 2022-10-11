<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->increments('m_id');
            $table->string('m_title', 255);
            $table->string('m_action', 255);
            $table->string('m_author', 255);
            $table->boolean('m_main')->default(true);
            $table->integer('m_mainMenuID')->default(0);
            $table->boolean('m_status')->default(true);
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
        //
    }
};
