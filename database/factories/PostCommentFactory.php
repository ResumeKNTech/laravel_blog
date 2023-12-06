<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostComment>
 */
class PostCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comment' => $this->faker->paragraph,
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'replied_comment' => $this->faker->boolean(50) ? $this->faker->paragraph : null, // 50% cơ hội để có một replied comment
            'parent_id' => null, // Có thể thiết lập logic để gán nếu cần
            'user_id' => User::inRandomOrder()->first()->id ?? null,
            'post_id' => Post::inRandomOrder()->first()->id ?? null,
        ];
    }
}
