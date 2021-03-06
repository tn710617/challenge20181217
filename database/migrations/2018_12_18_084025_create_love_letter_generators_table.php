<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoveLetterGeneratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('love_letter_generators', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('FindLittleMan')->default(0);
            $table->integer('LuckyYou')->default(0);
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
        Schema::dropIfExists('love_letter_generators');
    }
}
