<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Partner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestBlogs = Blog::latest()->take(9)->get();
        $partners = Partner::latest()->take(6)->get();
        $tutorialCategory = Category::where('slug','tutorial')->first();

        $tutorials = $tutorialCategory->blogs()->paginate(6);

        return view('home',[
            'latestBlogs' => $latestBlogs,
            'partners' => $partners,
            'tutorials' => $tutorials,
        ]);
    }
}
