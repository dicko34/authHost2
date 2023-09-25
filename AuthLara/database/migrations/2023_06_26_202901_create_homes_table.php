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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('show');
            $table->string('home_type');
            $table->string('status');
            $table->integer('rooms_number');
            $table->integer('bathrooms_number');
            $table->integer('kitchen_number');
            $table->string('balcony');
            $table->string('loung');
            $table->string('area');
            $table->string('land_area');
            $table->bigInteger('price');
            $table->string('ad_duration_per_day');
            $table->string('extras');
            $table->string('address');
            $table->string('city');
            $table->longText('description');
            $table->string('img');
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
        Schema::dropIfExists('homes');
    }
};
