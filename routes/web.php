<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\TutorialController;
use App\Models\Blog;
use App\Models\Partner;
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

Route::get('/',[HomeController::class,'index']);

Route::get('/blog',[BlogController::class,'get']);

Route::get('/partners',[PartnerController::class,'index']);
Route::get('/partners/{type:slug}',[PartnerController::class,'show']);

Route::get('/category/{category:slug}',[BlogController::class,'getByCategory']);
