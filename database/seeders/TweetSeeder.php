<?php

namespace Database\Seeders;

use App\Models\Tweet;
use App\Models\User;
use Illuminate\Database\Seeder;

class TweetSeeder extends Seeder
{
    public function run(): void
    {
        Tweet::factory()->count(400)->create([
            'created_by' => User::first(),
        ]);
    }
}
