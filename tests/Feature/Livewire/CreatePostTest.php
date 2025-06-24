<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreatePost;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreatePostTest extends TestCase
{
    use RefreshDatabase;

    public function test_renders_successfully()
    {
        Livewire::test(CreatePost::class)
            ->assertStatus(200);
    }

    public function test_can_create_new_post()
    {
        $uniqueTitle = 'No title like this before' . date('YmdHis') . rand(3,33);
        $content = 'Some content';

        $post = Post::whereTitle($uniqueTitle)->first();

        $this->assertNull($post);

        Livewire::test(CreatePost::class)
            ->set('title', $uniqueTitle)
            ->set('content', $content)
            ->call('save');

        $post = Post::whereTitle($uniqueTitle)->first();

        $this->assertNotNull($post);
        $this->assertEquals($uniqueTitle, $post->title);
        $this->assertEquals($content, $post->content);
    }

    public function test_title_is_required()
    {
        Livewire::test(CreatePost::class)
            ->set('title', '')
            ->call('save')
            ->assertHasErrors(['title' => 'required']);
    }

    public function test_min_length_required()
    {
        Livewire::test(CreatePost::class)
            ->set('title', 'aa')
            ->call('save')
            ->assertHasErrors(['title' => 'min:4']);
    }
}
