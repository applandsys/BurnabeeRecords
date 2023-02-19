<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('content_type'); // Movie Music Drama
            $table->enum('video_type',['embeded','uploaded']); // Embeded // Uploaded
            $table->integer('category_id');
            $table->text('thubmnail_image')->nullable();
            $table->longText('description')->nullable();
            $table->text('youtube_iframe_link')->nullable();
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
        Schema::dropIfExists('videos');
    }
}
