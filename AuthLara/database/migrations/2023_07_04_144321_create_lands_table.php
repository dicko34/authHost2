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
        Schema::create('lands', function (Blueprint $table) {
            $table->id();
            $table->string('brief');
            $table->string('area');
            $table->bigInteger('price');
            $table->string('surrounded_by');
            $table->string('located_on');
            $table->string('features');
            $table->longText('description');
            $table->string('img');
            $table->string('city');
            $table->string('address');
            $table->string('ad_duration_per_day');
            $table->string('advertiser_name');
             $table->string('phone_number');
            $table->string('mobile');
            $table->string('email');
            $table->enum('state',['pinned','refused','allowed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lands');
    }
};
