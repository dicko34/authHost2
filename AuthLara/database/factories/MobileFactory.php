<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mobile>
 */
class MobileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'device_status' =>   \fake()->word(2),
            'model' =>  \fake()->company(),
            'reset_model' => \fake()->company(),
            'slides_number' =>   \fake()->randomElement([1,2]),
            'screen_size' =>  \fake()->randomNumber(8, true),
            'cameras' =>  \fake()->randomNumber(8, true),
            'memory' =>  \fake()->randomElement([16,32,64,128,256,512]),
            'storage' =>  \fake()->randomElement([16,32,64,128,256,512]),
            'price' =>  \fake()->randomNumber(8, true),
            'address' => \fake()->address(),
            'description' =>  \fake()->text(),
            'img'=> basename(\fake()->image(config('app.image_path')('mobiles'))),

            'ad_duration_per_day' =>  \fake()->randomNumber(2, true),
            'city' =>  \fake()->city(),
            'advertiser_name' => \fake()->name(),
            'phone_number' =>  \fake()->e164PhoneNumber(),
            'mobile' => \fake()->e164PhoneNumber(),
            'email' =>  \fake()->email(),
        ];
    }
}
