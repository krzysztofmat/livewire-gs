<div>
    <form wire:submit="add">
        <input type="text" wire:model.live.change="todo">

        {{-- <span>Curr: {{ $todo }}</span> --}}

        <button type="submit">Add</button>
    </form>
    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
