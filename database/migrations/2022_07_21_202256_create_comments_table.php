<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();

            //$table->foreignId('post_id')->constrained()->cascadeOnDelete();
            //$table->foreignId('user_id')->constrained()->cascadeOnDelete();
            // $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('robert_id');
            $table->unsignedBigInteger('user_id');
            $table->text('body');
            $table->timestamps();
            // 動態連結外部ｉｄ
            $table->foreign('robert_id')->references('id')->on('roberts')->cascadeOnDelete();
            // $table->foreign('post_id')->references('id')->on('roberts')->cascadeOnDelete();
           $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
