<?php

namespace Database\Seeders;

use App\Models\Cars;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cars::factory()
        ->count(5)
        ->create();
    }
}
