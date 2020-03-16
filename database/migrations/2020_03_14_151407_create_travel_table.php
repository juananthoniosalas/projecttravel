<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel', function (Blueprint $table) {
         $table->increments('id');
         $table->string('nama');
         $table->text('alamat');
         $table->string('email');
         $table->string('nomorhp');
         $table->date('tanggal');
         $table->string('gunung');
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
        Schema::dropIfExists('travel');
    }
}
