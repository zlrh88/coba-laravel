<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;


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
    return view('home', [
        'name' => "Travis Bickle",
        'email' => "travisbickle@gmail.com",
        'image' => "gweh.png",
        'title' => 'Home',
    ]);
});


Route::get('/about', function () {
    return view('about', [
        'name' => "Travis Bickle",
        'email' => "travisbickle@gmail.com",
        'image' => "gweh.png",
        'title' => "About",
    ]);
});



Route::get('/posts', [PostController::class, 'index']); 

//halaman single postP
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Categories',
        'categories' => Category::all(),
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'title' =>"Post By Category : " . $category->name,
        'posts' => $category->posts->load(['category', 'author']),
    ]);
});

Route::get('/author/{author:username}', function(User $author){
    return view('posts', [
        'title' => 'Post By Author : ' . $author->name,
        'posts' => $author->posts->load(['category', 'author']),

    ]);
});

// Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
// Route::post('/login', [LoginController::class, 'authenticate']);

Route::controller(LoginController::class)->group(function() {
    Route::get('/login', 'index')->middleware('guest')->name('login');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout');
});

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
        return view('dashboard.index');
    })->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');