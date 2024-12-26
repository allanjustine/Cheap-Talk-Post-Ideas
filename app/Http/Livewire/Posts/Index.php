<?php

namespace App\Http\Livewire\Posts;

use App\Models\Category;
use App\Models\Post;

use Livewire\Component;

class Index extends Component
{
    public $search, $category_id = 'All';
    public $postId, $postDelete;
    public function loadPost()
    {
        $query = Post::with('category')->orderBy('author', 'desc')
            ->search($this->search);

        if ($this->category_id != 'All') {
            $query->where('category_id', $this->category_id);
        }

        $posts = $query->paginate(5);

        return compact('posts');
    }
    public function delete($postId)
    {
        $this->postDelete = $postId;
    }
    public function deleted()
    {

        Post::find($this->postDelete)->delete();

        return redirect('/posts')->with('message', 'The post is deleted permanently.');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.posts.index', $this->loadPost(), ['categories' => $categories]);
    }
}
