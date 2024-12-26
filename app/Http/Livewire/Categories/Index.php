<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class Index extends Component
{

    public $categoryId, $categoryDelete;

    public function delete($categoryId) {
        $this->categoryDelete = $categoryId;
    }
    public function deleted() {

        Category::find($this->categoryDelete)->delete();

        return redirect('/categories')->with('message', 'The category is deleted permanently.');
    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.categories.index', ['categories' => $categories]);
    }
}
