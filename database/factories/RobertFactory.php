<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Robertt;
use App\Models\User;
use App\Models\Category;


class RobertFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => $this->faker->sentence(5),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->sentence(5),
            // ->paragraph()
             'body' => $this->faker->sentence(1),

        ];
    }
}
