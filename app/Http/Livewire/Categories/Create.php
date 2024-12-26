<?php

namespace App\Http\Livewire\Categories;

use Livewire\Component;
use App\Models\Category;

class Create extends Component
{
    public $category, $remarks;

    public function addCategory()
    {
        $this->validate([
            'category'    => ['required', 'string', 'max:255', 'unique:categories'],
            'remarks'     => ['required', 'string', 'max:255']
        ]);

        Category::create([
            'category'    => $this->category,
            'remarks' => $this->remarks
        ]);

        return redirect('categories')->with('message', 'Category is added successfully');
    }
    public function render()
    {
        return view('livewire.categories.create');
    }
}
