<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Posts extends Component
{   
    public $msg = 'mensagem de two-way data binding';
    
    public function render()
    {
        return view('livewire.posts');
    }
}
