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
        Schema::create('listing_details', function (Blueprint $table) {
            $table->id();
            $table->text('tittle')->nullable();
            $table->text('description')->nullable();
            $table->text('price')->nullable();
            $table->text('google_map_link')->nullable();
            $table->string('listing_for')->nullable();
            $table->string('status')->nullable();
            $table->foreignId('agent_id')->constrained('agents')->onDelete('cascade');
            $table->foreignId('city_id')->constrained('cities')->onDelete('cascade');
            $table->foreignId('area_id')->constrained('areas')->onDelete('cascade');
            $table->foreignId('property_type_id')->constrained('property_types')->onDelete('cascade');
            $table->foreignId('property_details_id')->constrained('property_details')->onDelete('cascade');
            $table->foreignId('property_features_id')->constrained('property_features')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listing_details');
    }
};
