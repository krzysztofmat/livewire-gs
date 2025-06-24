<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Page Title' }}</title>
        <link rel="stylesheet" href="/app.css">
    </head>
    <body>
        <nav>
            <a wire:navigate href="/">Home</a>
            <a wire:navigate href="/todos" @class(['current' => request()->is('todos')])>Todos</a>
            <a wire:navigate href="/counter" @class(['current' => request()->is('counter')])>Counter</a>
            <a wire:navigate href="/posts" @class(['current' => request()->is('posts')])>Posts</a>
            <a wire:navigate href="/posts/create" @class(['current' => request()->is('posts/create')])>Create Post</a>
        </nav>

        {{ $slot }}
    </body>
</html>
