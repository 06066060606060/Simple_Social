<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => DB::table('users')->inRandomOrder()->first()->id,
            'content' => $this->faker->paragraph(),
            'image' => $this->faker->imageUrl($width = 1280, $height = 720),
            'updated_at' => now(),
        ];
    }
}
