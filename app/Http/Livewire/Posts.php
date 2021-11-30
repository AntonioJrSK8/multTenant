<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class Posts extends Component
{   
    use WithPagination;

    public $title = '';
    public $body = '';
    public $search = '';
 
    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $rules = [
        'title' => 'required|min:3|max:255',
        'body'  => 'required|min:3|max:255'
    ];

    public function render()
    {
        $posts = Post::where('title', 'like', '%'.$this->search.'%')->paginate(5);

        return view('livewire.posts', compact('posts'));
    }

    public function create(Request $request)
    {
        $this->validate();

        //dd($request->all());

        $post = $request->user()
                        ->posts()
                        ->create([
                            'title' => $this->title,
                            'body'  => $this->body
                        ]);

        $this->title = '';
        $this->body = '';

        return redirect()->back()->withSuccess('Cadastro realizado');
    }
}
