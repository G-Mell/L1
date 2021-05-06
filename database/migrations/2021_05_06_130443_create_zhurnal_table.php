<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZhurnalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zhurnal', function (Blueprint $table) {
            $table->id();
            $table->string('daterow');
            $table->string('courserow');
            $table->string('grouprow');
            $table->string('namerow');
            $table->string('lectures');
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
        Schema::dropIfExists('zhurnal');
    }
}
