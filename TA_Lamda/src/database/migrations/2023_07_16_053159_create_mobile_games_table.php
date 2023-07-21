<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mobile_games', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('postedby');
            $table->string('gamename');
            $table->string('developer');
            $table->string('download_url');
            $table->string('thumbnail_url');
            $table->string('genre');
            $table->text('about');
            $table->string('screenshot_url_1');
            $table->string('screenshot_url_2');
            $table->string('screenshot_url_3');
            $table->string('screenshot_url_4');
            $table->string('video_url');
            $table->string('publish_date');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobile_games');
    }
};
