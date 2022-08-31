<?php

namespace Database\Factories;
use App\Models\Comment;
use App\Models\Robert;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'robert_id' => Robert::factory(),
           'user_id' => User::factory(),
           'body' => $this->faker->paragraph()
        ];
    }
}
