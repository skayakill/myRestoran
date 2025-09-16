<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ItemFactory extends Factory
{
    
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(), 
            'category_id' => $this->faker->numberBetween(1, 2),
            'price' => $this->faker->randomFloat(2, 1000, 1000000),
            'description' => $this->faker->text(),
            'img' => fake()->randomElement(
            ['https://images.unsplash.com/photo-1579584425555-c3ce17fd4351',
            'https://unsplash.com/photos/takoyaki-a-popular-japanese-street-food-dish-O9keRareNeY',
            'https://plus.unsplash.com/premium_photo-1694547926001-f2151e4a476b']
            ),
            'is_active' => $this->faker->boolean(),
        ];
    }
}
