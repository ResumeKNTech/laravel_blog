<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostTag>
 */
class PostTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->unique()->words(2, true); // Tạo một tiêu đề ngẫu nhiên

        return [
            'title' => $title,
            'slug' => Str::slug($title), // Sử dụng tiêu đề để tạo slug
            'status' => $this->faker->randomElement(['active', 'inactive']), // Chọn ngẫu nhiên trạng thái
        ];
    }
}
