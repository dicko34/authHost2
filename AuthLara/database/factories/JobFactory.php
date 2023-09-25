<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'specialization' =>  \fake()->jobTitle(),
            'workplace' =>  \fake()->city(),
            'night_work' =>  \fake()->word(),
            'permanence' =>  \fake()->word(),
            'description' =>  \fake('ar_SA')->text(),
            'img'=> basename(\fake()->image(config('app.image_path')('job'))),

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
