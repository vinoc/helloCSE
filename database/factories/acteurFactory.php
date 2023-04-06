<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class acteurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "description" => $this->faker->text($maxNbChars = 400),
            "picture" => $this->faker->imageUrl($width = 200, $height = 200)
            
        ];
    }
}
