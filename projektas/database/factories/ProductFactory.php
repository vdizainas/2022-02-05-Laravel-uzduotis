<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            // 'title' => $this->faker->word(3, true),
            'title' => $this->faker->sentence(3),
            'description'=> $this->faker->paragraph(3),
            'price'=> $this-> faker->randomFloat(2, 1, 8),
            'category_id'=> rand(1, 3),
            'image_url'=> $this->faker->imageUrl()
        ];
    }
}
