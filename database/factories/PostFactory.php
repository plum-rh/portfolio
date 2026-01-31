<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3),
            'image' => 'data:image/png;base64,' . base64_encode(random_bytes(16)),
            'description' => $this->faker->paragraph(),
            'created_date' => $this->faker->dateTime(),
            'category_id' => Category::factory(),
            'link' => $this->faker->url(),
        ];
    }
}
