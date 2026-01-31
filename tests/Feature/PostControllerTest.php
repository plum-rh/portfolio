<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class PostControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_displays_form_with_all_categories(): void
    {
        $cats = Category::factory()->count(3)->create();

        $response = $this->get(route('post.create'));

        $response->assertStatus(200);
        foreach ($cats as $cat) {
            $response->assertSee(e($cat->name));
        }
    }

    public function test_store_persists_post_with_base64_image_and_redirects_back(): void
    {
        $category = Category::factory()->create();
        $file = UploadedFile::fake()->image('photo.jpg', 100, 100);

        $payload = [
            'name' => 'Test Post',
            'description' => 'Body',
            'image' => $file,
            'date' => '2024-12-31',
            'category_id' => $category->id,
            'link' => 'https://example.com',
        ];

        $response = $this->post(route('post.store'), $payload, [
            'HTTP_REFERER' => route('post.create'),
        ]);

        $response->assertStatus(302);
        $response->assertRedirect(route('post.create'));

        $this->assertDatabaseCount('posts', 1);
        $post = Post::first();
        $this->assertSame('Test Post', $post->name);
        $this->assertSame('Body', $post->description);
        $this->assertStringStartsWith('2024-12-31', (string)$post->created_date);
        $this->assertSame($category->id, $post->category_id);
        $this->assertSame('https://example.com', $post->link);
        $this->assertNotNull($post->image);
        $this->assertStringStartsWith('data:image/', $post->image);
        $this->assertStringContainsString(';base64,', $post->image);
    }

    public function test_show_returns_works_view_with_posts_and_categories(): void
    {
        $categories = Category::factory()->count(2)->create();
        Post::factory()->count(3)->for($categories->first())->create();

        $response = $this->get(route('post.show'));

        $response->assertStatus(200);
        $response->assertViewIs('works.works');
        $response->assertViewHasAll(['all_posts', 'all_categories']);
    }

    public function test_show_coffee_returns_demo_view(): void
    {
        $response = $this->get(route('post.showcoffee'));
        $response->assertStatus(200);
        $response->assertViewIs('works.demo.coffee-bean');
    }

    public function test_show_cruise_returns_demo_view(): void
    {
        $response = $this->get(route('post.showcruise'));
        $response->assertStatus(200);
        $response->assertViewIs('works.demo.cruise');
    }
}
