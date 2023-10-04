<?php


use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;

use App\Models\Category;
use App\Models\User;



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
    return view('home',[
        "title" => "Home",
        'active' => 'home',
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "spengebobs",
        "email" => "spongebob@gmail.com",
        "image" => "test.jpg",
        'active' => 'about',
    ]);
});


Route::get('/posts', [PostController::class,'index' ]);
Route::get('posts/{post:slug}',[PostController::class,'show']);


Route::get('categories',function(){
    return view ('categories',[
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
        
    ]);
});



// sudah tidak terpakai karena sudah digantikan dengan funcrion scopeFilter di model
// Route::get('categories/{category:slug}',function(Category $category){
//     return view ('posts',[
//         'title' => "Post by Category :  $category->name",
//         'active' => 'categories',
//         'posts' => $category -> posts -> load ('category', 'author'),
//     ]);

// });


// sudah tidak terpakai karena sudah digantikan dengan funcrion scopeFilter di model
// Route::get('/authors/{author:username}',function(User $author){
//     return view ('posts',[
//         'title' => "Post By Author : $author->name",
//         'posts' => $author -> posts -> load('category', 'author'),
//         'active' => 'posts',
        
//     ]);

// });
