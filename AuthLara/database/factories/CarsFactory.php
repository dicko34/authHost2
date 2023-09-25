<?php

namespace Database\Factories;

use config;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cars>
 */
class CarsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'model' => \fake()->company(),
            'company' => \fake()->company(),
            'reset_model' => \fake()->company(),
            'model_year' => \fake()->year(),
            'car_color' => \fake()->safeColorName(),
            'power' => \fake()->randomNumber(8,true),
            'passengers' =>  \fake()->randomNumber(8,true),
            'car_usage' => \fake()->randomNumber(2,true),
            'drive_type' =>  \fake('ar_SA')->company(),
            'speedmotors' =>  \fake()->randomNumber(8,true),
            'origin' =>  \fake('ar_SA')->company(),
            'price' =>  \fake()->randomNumber(8,true),
            'driving_license' => \fake()->randomElement(['فلسطينية','نمرة صفراء']),
            'fuel_type' =>  \fake()->randomElement(['هايبرد','بنزين','سولار','كهرباء']),
            'lime_type' => \fake()->randomElement(['عادي','اوتوماتيك','نصف اوتوماتيك']),
            'glass' =>  \fake()->randomElement(['يدوي','الكتروني']),
            'shown' => \fake()->randomElement(['للبيع','للبدل فقط','للبيع و البدل','للايجار']),
            'pay_method' =>  \fake()->randomElement(['نقدا فقط ','إمكانيه التقسيط']),
            'extras' =>  \join(",",\fake()->words()),
            'address' => \fake()->address(),
            'description' =>  \fake()->text(),
            'img'=> basename(\fake()->image(config('app.image_path')('cars'))),
            'ad_duration_per_day' =>  \fake()->randomNumber(2,true),
            'city' =>  \fake()->city(),
            'advertiser_name' => \fake()->name(),
            'phone_number' =>  \fake()->e164PhoneNumber(),
            'mobile' => \fake()->e164PhoneNumber(),
            'email' =>  \fake()->email(),
        ];
    }
}
