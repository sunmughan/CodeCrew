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
        Schema::create('helpCenter', function (Blueprint $table) {
            $table->increments('hc_id');
            $table->string('hc_question', 255);
            $table->string('hc_actionId',255);
            $table->longText('hc_answer');
            $table->string('hc_author', 255);
            $table->boolean('hc_status')->default(true);
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
