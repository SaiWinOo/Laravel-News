<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\TutorialController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $blog =     Blog::first();

    return view('welcome',[
        'blog' => $blog
    ]);
});

Route::get('/category/{category:slug}',[BlogController::class,'index']);
