<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Land>
 */
class LandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brief' =>  \fake()->word(),
            'area' =>  \fake()->randomNumber(8, true),
            'price' =>  \fake()->randomNumber(8, true),
            'located_on' =>  \fake()->address(),
            'features' =>  \join(",", \fake()->words()),
            'surrounded_by' =>  \fake('ar_SA')->word(),
            'address' => \fake()->address(),
            'description' =>  \fake()->text(),
            'img'=> basename(\fake()->image(config('app.image_path')('lands'))),
            'ad_duration_per_day' =>  \fake()->randomNumber(2, true),
            'city' =>  \fake()->city(),
            'advertiser_name' => \fake()->name(),
            'phone_number' =>  \fake()->e164PhoneNumber(),
            'mobile' => \fake()->e164PhoneNumber(),
            'email' =>  \fake()->email(),
        ];
    }
}
