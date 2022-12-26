<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Info>
 */
class InfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'user_id' => 1,
            'image' => $this->faker->imageUrl(100, 100),
            'description' => $this->faker->paragraph(12),
            'full_name' => $this->faker->name(),
            'age' => $this->faker->randomNumber(2),
            'ph_number' => $this->faker->phoneNumber(),
            'address' => $this->faker->address()
        ];
    }
}
