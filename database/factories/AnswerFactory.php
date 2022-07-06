<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Answer>
 */
class AnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'body' => $this->faker->paragraphs(rand(3,7), true),
            'votes_count' => rand(0,5),
            'question_id' => function() {
                return \App\Models\Question::all()->random();
            },
            'user_id' => \App\Models\User::pluck('id')->random(),
        ];
    }
}
