<div>
    <h2>New post</h2>

    <div x-data="{ count:5 }">
        <span x-text="count"></span>
        <button x-on:click="count++">+</button>
    </div>

    <div>
        Current title: <span x-text="$wire.title.toUpperCase() + $wire.content"></span>
    </div>

    <div>
        <button x-on:click="$wire.title = ''">Clear title</button>
        <button x-on:click="$wire.save()">Submit form</button>
    </div>

    <form wire:submit="save">
        <label>
            <span>Title</span>
            <input type="text" wire:model="title">
            @error('title')
                <em>{{ $message }}</em>
            @enderror
        </label>

        <label>
            <span>Content</span>
            <textarea wire:model="content"></textarea>
            <small>Characters
                <span x-text="$wire.content.length"></span>
            </small>
            @error('content')
                <em>{{ $message }}</em>
            @enderror
        </label>

        <button type="submit">Create</button>
    </form>
</div>
