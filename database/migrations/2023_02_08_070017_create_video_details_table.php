<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('video_id')->nullable(); //common
            $table->smallInteger('release_year')->nullable(); //common
            $table->string('quality')->nullable(); // common
            $table->string('language')->nullable(); //common
            $table->string('duration')->nullable(); //common
            $table->string('singer')->nullable();
            $table->string('lyrics')->nullable();
            $table->string('tune')->nullable();
            $table->string('music_composition')->nullable();
            $table->string('direction')->nullable(); // common
            $table->string('cast')->nullable(); //common
            $table->string('label')->nullable();
            $table->string('recorded_at')->nullable();
            $table->string('tags')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video_details');
    }
}
