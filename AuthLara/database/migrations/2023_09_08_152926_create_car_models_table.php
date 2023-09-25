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
        Schema::create('car_models', function (Blueprint $table) {
            $table->id();
            $table->string('model_name');
            $table->string('car_company_name'); // Store the name of the car company
            $table->timestamps();

            // Define a foreign key relationship to the name column of car_companies
            $table->foreign('car_company_name')
                ->references('name')
                ->on('car_companies')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_models');
    }
};
