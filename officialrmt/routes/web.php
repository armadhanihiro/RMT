<?php

use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

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
Route::get('/members', [MemberController::class, 'show']);
Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact RMT"
    ]);
});
