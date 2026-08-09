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
        Schema::create('popups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('is_active')->default(true);
            $table->longText('html_content');
            $table->string('target_type')->default('all');
            $table->json('pages')->nullable();
            $table->json('url_patterns')->nullable();
            $table->json('category_ids')->nullable();
            $table->string('frequency')->default('once_per_session');
            $table->unsignedInteger('delay_seconds')->default(0);
            $table->integer('priority')->default(0);
            $table->timestamp('start_at')->nullable();
            $table->timestamp('end_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('popups');
    }
};
