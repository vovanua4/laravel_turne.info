<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categors', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name',255);
            $table->boolean('active',255)->default(FALSE);
            $table->text('info');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categors');
    }
}
