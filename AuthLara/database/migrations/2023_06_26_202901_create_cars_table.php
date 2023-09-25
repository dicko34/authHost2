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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('company');
            $table->string('reset_model');
            $table->string('model_year');
            $table->string('car_color');
            $table->string('power');
            $table->string('passengers');
            $table->string('drive_type');
            $table->bigInteger('speedmotors');
            
            $table->string('car_usage');
            $table->string('origin');
            $table->bigInteger('price');
            $table->string('ad_duration_per_day');

            $table->enum('driving_license',['فلسطينية','نمرة صفراء']);
            $table->enum('fuel_type', ['هايبرد','بنزين','سولار','كهرباء']);
            $table->enum('lime_type',['عادي','اوتوماتيك','نصف اوتوماتيك']);
            $table->enum('glass',['يدوي','الكتروني']);
            $table->enum('shown',['للبيع','للبدل فقط','للبيع و البدل','للايجار']);
            $table->enum('pay_method',['نقدا فقط ','إمكانيه التقسيط']);
            $table->text('extras');
            $table->longText('description');
            $table->string('img');
            $table->string('advertiser_name');
             $table->string('phone_number');
            $table->string('mobile');
            $table->string('email');
            $table->string('city');
            $table->string('address');
            $table->enum('state',['pinned','refused','allowed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
