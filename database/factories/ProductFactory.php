<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->name() . '_product',
            'category' => fake()->name() . '_category',
            'company' => fake()->company() . '_company_name',
            'image' => fake()->image() . 'image_path',
            'title' => fake()->title(),
            'description' => fake()->paragraph(5),
            'keywords' => fake()->name() . '_keywords',
            'price' => fake()->randomNumber(),
            'created_at' => now()
            
        ];
    }
}
