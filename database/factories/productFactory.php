<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomDigit(),
            'thumbnail_url' => $this->faker->imageUrl(270,320),
            'quantity' => $this->faker->numberBetween(10,50),
            'status' => rand(0,2),
            'category_id' => rand(1,10),
        ];
    }
}
