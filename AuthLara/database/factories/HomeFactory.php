<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Home>
 */
class HomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'show' =>   \fake()->word('ar_SA'),
            'home_type' =>   \fake()->word('ar_SA'),
            'status' =>  \fake()->word('ar_SA'),
            'rooms_number' =>  \fake()->randomNumber(3,true),
            'bathrooms_number' =>  \fake()->randomNumber(3,true),
            'kitchen_number' => \fake()->randomNumber(3,true),
            'balcony' => \fake()->randomNumber(3,true),
            'loung' =>  \fake()->word('ar_SA'),
            'area' =>  \fake()->randomNumber(2,true),
            'land_area' =>  \fake()->randomNumber(3,true),
            'extras' =>  \join(",",\fake()->words()),
            'price' =>  \fake()->randomNumber(8,true),
            'description' =>  \fake('ar_SA')->text(),
            'img'=> basename(\fake()->image(config('app.image_path')('homes'))),
            'city' =>  \fake()->city(),
            'address' => \fake()->address(),
            'ad_duration_per_day' =>  \fake()->randomNumber(2,true),
            'advertiser_name' => \fake()->name(),
            'phone_number' =>  \fake()->e164PhoneNumber(),
            'mobile' => \fake()->e164PhoneNumber(),
            'email' =>  \fake()->email(),
        ];
    }
}
