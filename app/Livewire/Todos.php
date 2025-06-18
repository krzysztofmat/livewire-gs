<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public string $todo = '';

    public array $todos = [
        'take out trash',
        'do dishes'
    ];

    public function add()
    {
        $this->todos[] = $this->todo;

        // $this->todo = '';
        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
