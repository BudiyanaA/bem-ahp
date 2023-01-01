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
        Schema::create('weights', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alternative_id');
            $table->unsignedBigInteger('administration_id');
            $table->unsignedBigInteger('portfolio_id');
            $table->integer('knowledge');
            $table->integer('psikotest');
            $table->integer('interview');
            $table->timestamps();

            $table->foreign('alternative_id')->references('id')->on('users');
            $table->foreign('administration_id')->references('id')->on('administrations');
            $table->foreign('portfolio_id')->references('id')->on('portfolios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weights');
    }
};
