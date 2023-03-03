<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCelebritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('celebrities', function (Blueprint $table) {
            $table->id();
            $table->string('celebrity_name');
            $table->string('nick_name');
            $table->longText('description');
            $table->text('profile_photo');
            $table->text('facebook_link')->nullable();
            $table->text('twitter_link')->nullable();
            $table->text('video_id')->nullable(); // have role in the video
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
        Schema::dropIfExists('celebrities');
    }
}
