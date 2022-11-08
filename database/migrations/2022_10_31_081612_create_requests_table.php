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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->string("title_request");
            $table->string("text_request");
            $table->unsignedBigInteger('subdivision_id');
            $table->unsignedBigInteger("category_id")->default(0);
            $table->date("date_request");
            $table->timestamps();

            $table->foreign("user_id")->references("id")->on('users');
            $table->foreign('subdivision_id')->references('id')->on('subdivisions');
            $table->foreign("category_id")->references("id")->on("categories");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request');
    }
};
