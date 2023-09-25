<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'offer' => \fake()->boolean() ,
            'displayed' => \fake()->words(1,true),
            'brief' =>  \fake()->paragraph(1),
            'area' =>   \fake()->randomNumber(2,true),
            'price' =>  \fake()->randomNumber(8, true),
            'address' => \fake()->address(),
            'description' =>  \fake()->text(),
            'img'=> basename(\fake()->image(config('app.image_path')('Shops'))),

            'ad_duration_per_day' =>  \fake()->randomNumber(2, true),
            'city' =>  \fake()->city(),
            'advertiser_name' => \fake()->name(),
            'phone_number' =>  \fake()->e164PhoneNumber(),
            'mobile' => \fake()->e164PhoneNumber(),
            'email' =>  \fake()->email(),
        ];
    }
}
