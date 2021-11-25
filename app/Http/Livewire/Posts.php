<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Posts extends Component
{   
    public $title = 'mensagem de two-way data binding';
    
    protected $rules = [
        'title' =>'required|min:3|max:255'
    ];

    public function render()
    {
        $posts = \App\Models\Post::all();

        return view('livewire.posts', compact('posts'));
    }

    public function create()
    {
        $this->validate();

        \App\Models\Post::create([
            'user_id' => 1,
            'tenant_id' => 1,
            'body' => 'ok não nula',
            'title' => $this->title
        ]);

        $this->title = '';
    }
}
