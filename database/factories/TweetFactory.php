<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TweetFactory extends Factory
{
    public function definition(): array
    {
        return [
            'body' => $this->faker->sentence,
            'created_by' => User::factory(),
        ];
    }
}
