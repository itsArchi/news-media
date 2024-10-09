<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReadLatersTable extends Migration
{
    public function up()
    {
        Schema::create('read_laters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); // Allow null for guest users
            $table->unsignedBigInteger('news_id');
            $table->timestamps();

            // Foreign key constraint (optional if you want to enforce relationships)
            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('read_laters');
    }
}

