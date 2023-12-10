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
        Schema::create('shetabit_visits', function (Blueprint $table) {
            $table->id();
           
            $table->string('method');
            $table->string('request');
            $table->string('url');
            $table->string('referer');
            $table->string('languages', 100);
            $table->string('useragent', 255);
            $table->text('headers');
            $table->string('device');
            $table->string('platform', 100);
            $table->string('browser', 100);
            $table->string('ip', 16);
            $table->string('visitor_id');
            $table->string('visitor_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shetabit_visits');
    }
};
