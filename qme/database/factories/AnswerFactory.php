<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Question;
use App\Models\Ansewer;

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
    public function definition(): array
    {
        return [
             // 既存のユーザーからランダムに1人選んで user_id を設定
             'user_id' => User::inRandomOrder()->first()->id,
             // 既存の質問からランダムに1つ選んで question_id を設定
             'question_id' => Question::inRandomOrder()->first()->id,
             'text' => fake()->realText(100),
         ];
    }
}