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
        Schema::create('authTable', function (Blueprint $table) {
            $table->increments('au_id');
            $table->string('au_profil', 255)->nullable();
            $table->string('au_ad', 255)->nullable();
            $table->string('au_soyad', 255)->nullable();
            $table->string('au_email');
            $table->string('au_password');
            $table->string('au_country', 255)->nullable();
            $table->ipAddress('au_regIp');
            $table->dateTime('au_lastLoginDate');
            $table->string('au_permissions',255);
            $table->string('remember_token', 255)->nullable();
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
        Schema::drop('authTable');
    }
};
