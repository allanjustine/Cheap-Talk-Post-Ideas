<?php

namespace App\Http\Livewire\Posts;

use App\Models\Category;
use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{
    public $category_id, $author, $title, $content;

    public function addPost()
    {

        $this->validate([
            'author'    => ['required', 'string', 'max:255'],
            'title'     => ['required', 'string', 'max:255'],
            'content'   => ['required', 'string', 'max:255'],
            'category_id' => ['required']
        ]);

        Post::create([
            'user_id'  =>    auth()->user()->id,
            'author'    => $this->author,
            'title' => $this->title,
            'content'   => $this->content,
            'category_id' => $this->category_id
        ]);

        return redirect('posts')->with('message', 'Posted successfully :)');
    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.posts.create', ['categories' => $categories]);
    }
}
