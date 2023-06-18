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
        Schema::create('article_scores', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('vote');
            $table->unsignedBigInteger('user_id')->nullable();;
            $table->unsignedBigInteger('article_id')->nullable();;
            // $table->foreign('article_id')->references('id')->on('articles');
            // $table->unsignedBigInteger('leaderboard_id')->nullable();;
            // $table->foreign('leaderboard_id')->references('id')->on('leaderboards');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {   
        Schema::table('article_scores', function (Blueprint $table) {
            // $table->dropForeign(['article_id']);
            // $table->dropColumn('article_id'); 
            // $table->dropForeign(['leaderboard_id']);
            // $table->dropColumn('leaderboard_id');  
        });
        Schema::dropIfExists('article_scores');
    }
};
