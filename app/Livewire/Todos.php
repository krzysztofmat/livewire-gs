<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todods')]
class Todos extends Component
{
    public string $todo = '';

    public array $todos = [];

    public function add()
    {
        $this->todos[] = $this->todo;

        // $this->todo = '';
        $this->reset('todo');
    }

    public function mount()
    {
        $this->todos = [
            'take out trash',
            'do dishes'
        ];
    }

    // public function updated($property, $value)
    // {
    //     // dd($property, $value); 'todo' 'st you typed'
    //     $this->$property = strtoupper($value);

    // }

    public function updatedTodo($value)
    {
        $this->todo = strtoupper($value);
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
