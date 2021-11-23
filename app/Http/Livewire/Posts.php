<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Posts extends Component
{   
    public $msg = 'mensagem de two-way data binding';

    public function render()
    {
        $posts = \App\Models\Post::all();

        return view('livewire.posts', compact('posts'));

    }

    public function create()
    {
        dd('debgu...');
    }
}
