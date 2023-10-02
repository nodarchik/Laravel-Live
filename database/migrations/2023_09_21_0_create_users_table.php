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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 256)->nullable(false);
            $table->string('email', 512)->unique()->nullable(false);
            $table->string('phone', 32)->nullable();
            $table->string('photo', 1024)->default('https://d3jqtupnzefbtn.cloudfront.net/andersenlab/new-andersensite/testimonials/60x60/without-photo.png');
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
        Schema::dropIfExists('users');
    }
};
