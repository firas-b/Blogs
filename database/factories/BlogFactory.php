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
    public function definition(): array
    {
        return [

            'title'=>$this->faker->sentence(1),
            'description'=>$this->faker->paragraph(2),
            'content'=>$this->faker->paragraph(10),
            'author'=>$this->faker->name(),



            //
        ];
    }
}
