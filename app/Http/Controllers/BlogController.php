<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Category $category)
    {

        return view('pages/blog',[
            'category'=> $category,
        ]);
    }
}
