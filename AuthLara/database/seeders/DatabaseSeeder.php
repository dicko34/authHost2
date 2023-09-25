<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Job;
use App\Models\Cars;
use App\Models\Home;
use App\Models\Land;
use App\Models\Shop;
use App\Models\Mobile;
use App\Models\General;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Cars::factory()
        ->count(10)
        ->create();
        General::factory()
        ->count(10)
        ->create();
        Home::factory()
        ->count(10)
        ->create();
        Job::factory()
        ->count(10)
        ->create();
        Land::factory()
        ->count(10)
        ->create();
        Mobile::factory()
        ->count(10)
        ->create();
        Shop::factory()
        ->count(10)
        ->create();
        User::factory()
        ->count(1)
        ->create();
    }
}
