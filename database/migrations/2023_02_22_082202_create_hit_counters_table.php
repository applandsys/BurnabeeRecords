<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHitCountersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hit_counters', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('post_id');
            $table->string('ip_address');
            $table->enum('post_type',['video','blog']);
            $table->bigInteger('unique_hits');
            $table->bigInteger('raw_hits');
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
        Schema::dropIfExists('hit_counters');
    }
}
