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
        Schema::create('mobiles', function (Blueprint $table) {
            $table->id();
            $table->string('device_status');
            $table->string('model');
            $table->string('reset_model');
            $table->string('slides_number');
            $table->string('screen_size');
            $table->string('cameras');
            $table->string('memory');
            $table->string('storage');
            $table->string('price');
            $table->string('city');
            $table->string('address');
            $table->string('ad_duration_per_day');
            $table->longText('description');
            $table->string('img');
            $table->string('advertiser_name');
            $table->string('phone_number');
            $table->string('email');
            $table->string('mobile');
            $table->enum('state',['pinned','refused','allowed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobiles');
    }
};
