<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "ar_title"=>$this->faker->sentence,
            "ar_desc"=>$this->faker->paragraph,
            "en_title"=>$this->faker->sentence,
            "en_desc"=>$this->faker->paragraph,
            "type"=>$this->faker->randomElement(['netbal','ongoing']),
        ];
    }
}
