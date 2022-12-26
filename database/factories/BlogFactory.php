<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
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
            'slug' => $this->faker->slug(),
            'image' => $this->faker->imageUrl(),
            'content' => $this->faker->paragraph(15),
            'published' => $this->faker->boolean()
        ];
    }
}
