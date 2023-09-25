<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\General>
 */
class GeneralFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'address' => \fake()->address(),
            'category' =>   \fake()->word(),
            'price' =>  \fake()->randomNumber(8,true),
            'description' =>  \fake()->text(),
            'img'=> basename(\fake()->image(config('app.image_path')('general'))),
            'ad_duration_per_day' =>  \fake()->randomNumber(2,true),
            'city' =>  \fake()->city(),
            'advertiser_name' => \fake()->name(),
            'phone_number' =>  \fake()->e164PhoneNumber(),
            'mobile' => \fake()->e164PhoneNumber(),
            'email' =>  \fake()->email(),
        ];
    }
}
