<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\PostCategory;
use App\Models\PostTag;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->unique()->sentence; // Tạo một tiêu đề ngẫu nhiên

        return [
            'title' => $title,
            'slug' => Str::slug($title), // Sử dụng tiêu đề để tạo slug
            'summary' => $this->faker->text(200),
            'description' => $this->faker->paragraphs(3, true),
            'quote' => $this->faker->sentence,
            'photo' => $this->faker->imageUrl(),
            'tags' => join(', ', $this->faker->words(3)),
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'post_cat_id' => PostCategory::inRandomOrder()->first()->id ?? null,
            'post_tag_id' => PostTag::inRandomOrder()->first()->id ?? null,
            'added_by' => User::inRandomOrder()->first()->id ?? null,
        ];
    }
}
