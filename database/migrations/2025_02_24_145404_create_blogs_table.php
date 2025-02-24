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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->string('image_path1');
            $table->text('description1')->nullable();
            $table->text('qoute1')->nullable();
            $table->text('description11')->nullable();
            $table->string('image_path2');
            $table->text('description2')->nullable();
            $table->text('qoute2')->nullable();
            $table->text('description22')->nullable();
            $table->string('image_path3');
            $table->text('description3')->nullable();
            $table->text('qoute3')->nullable();
            $table->text('description13')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
