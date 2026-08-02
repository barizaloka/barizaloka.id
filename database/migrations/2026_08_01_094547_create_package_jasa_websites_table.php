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
        Schema::create('package_jasa_websites', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('tagline')->nullable();
            $table->unsignedBigInteger('price');
            $table->string('price_label');
            $table->string('price_period')->default('per tahun');
            $table->json('features')->nullable();
            $table->string('cta_label')->nullable();
            $table->string('whatsapp_message')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->string('badge_label')->nullable();
            $table->unsignedInteger('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_jasa_websites');
    }
};
