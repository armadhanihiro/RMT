<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index', [
        "title" => "Home"
    ]);
});

Route::get('/event', function () {
    return view('event', [
        "title" => "Event RMT"
    ]);
});

Route::get('/event_detail', function () {
    return view('event_detail', [
        "title" => "Event Detail RMT"
    ]);
});

Route::get('/members', [MemberController::class, 'show']);
Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact RMT"
    ]);
});

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all(),
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('event_detail', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
}); 
