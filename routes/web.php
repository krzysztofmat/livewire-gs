<?php

use App\Livewire\Counter;
use App\Livewire\HelloWorld;
use App\Livewire\ShowPosts;
use App\Livewire\Todos;
use Illuminate\Support\Facades\Route;

Route::get('/', HelloWorld::class);
Route::get('/todos', Todos::class);
Route::get('/counter', Counter::class);
Route::get('/show-posts', ShowPosts::class);
