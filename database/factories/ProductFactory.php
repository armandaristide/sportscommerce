<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
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
            'name' => fake()->word,
            'categories' => fake()->word,
            'subcategories' => fake()->word,
            'color' => fake()->safeColorName,
            'tag' => fake()->word,
            'brand' => fake()->company,
            'imageone' => fake()->imageUrl(640, 480, 'products', true, 'Faker'),
            'imagetwo' => fake()->imageUrl(640, 480, 'products', true, 'Faker'),
            'imagethre' =>fake()->imageUrl(640, 480, 'products', true, 'Faker'),
            'imagefour' =>fake()->imageUrl(640, 480, 'products', true, 'Faker'),
            'description'=> fake()->paragraph,
            'price' => fake()->randomFloat(2, 10, 1000),
            'quantity' => fake()->numberBetween(1, 100),
            'size' => fake()->randomElement(['S', 'M', 'L', 'XL']),
            'filter' => fake()->word
        ];
    }
}
