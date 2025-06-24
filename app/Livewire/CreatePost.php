<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Title('Create a new post')]
class CreatePost extends Component
{
    #[Rule('required', as: 'my title', message: 'Cant miss my title')]
    #[Rule('min:4', message: 'c\'mon... this shortie?')]
    public $title = '';

    #[Rule('required', as: 'my content')]
    public $content = '';

    public function save()
    {
        $this->validate();
        // $this->validate([
        //     'title' => ['required'],
        //     'content' => ['required']
        // ]);

        Post::create([
            'title' => $this->title,
            'content' => $this->content
        ]);

        $this->redirect('/posts/create');
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
