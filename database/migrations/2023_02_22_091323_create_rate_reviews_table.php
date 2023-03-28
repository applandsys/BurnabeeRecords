<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rate_reviews', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('post_id');
            $table->enum('post_type',['video','blog']);
            $table->bigInteger('user_id');
            $table->smallInteger('rating')->nullable();
            $table->text('review_text')->nullable();
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
        Schema::dropIfExists('rate_reviews');
    }
}
