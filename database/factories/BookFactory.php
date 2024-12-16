<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
            'publisher_id' => \App\Models\Publisher::inRandomOrder()->first()->id,
            'description' => $this->faker->realText(),
            'number_of_copies' => $this->faker->numberBetween(5, 500),
            'number_of_pages' => $this->faker->numberBetween(50, 800),
            'price' => $this->faker->numberBetween(10, 100),
            'isbn' => $this->faker->isbn10(),
            'publish_year' => $this->faker->year(),
            'cover_image' => '.'
        ];
    }
}
