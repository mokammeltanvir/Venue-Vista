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
        Schema::create('venues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('location_id')->constrained('locations')->onDelete('cascade');
            $table->string('venue_name');
            $table->string('venue_slug')->unique();
            $table->string('venue_address')->nullable();
            $table->unsignedInteger('venue_capacity')->default(0);
            $table->unsignedMediumInteger('venue_price')->default(0);
            $table->longText('venue_description')->nullable();
            $table->string('venue_image')->default('default_venue.jpg');
            $table->longText('additional_info')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venues');
    }
};
