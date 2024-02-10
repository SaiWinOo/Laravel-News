<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\Partner;
use Livewire\Component;
use Livewire\WithPagination;

class Blogs extends Component
{
    use WithPagination;

    public $category;

    public function render()
    {
        $blogs = null;
        if(isset($this->category)){
            $blogs = $this->category->blogs()->latest()->paginate(1);
        }else{
            $blogs =Blog::latest()->paginate(1);
        }

        return view('livewire.blogs',[
            'blogs' => $blogs,
            'category' => $this->category,
            'partners' => Partner::latest()->take(6)->get(),
        ]);
    }
}
