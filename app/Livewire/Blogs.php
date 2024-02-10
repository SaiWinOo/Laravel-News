<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class Blogs extends Component
{
    use WithPagination;

    public $category;

    public function render()
    {
        $blogs = $this->category->blogs()->latest()->paginate(1);

        return view('livewire.blogs',[
            'blogs' => $blogs,
            'category' => $this->category,
        ]);
    }
}
