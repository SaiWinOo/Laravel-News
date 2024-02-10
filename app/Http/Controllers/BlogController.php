<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function get()
    {
        return view('pages/blog');
    }


    public function getByCategory(Category $category)
    {

        return view('pages/blog',[
            'category'=> $category,
        ]);
    }
}
