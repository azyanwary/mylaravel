<?php

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
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "spengebobs",
        "email" => "spongebob@gmail.com",
        "image" => "test.jpg"
    ]);
});





Route::get('/blog', function () {

    $blog_post = [
        [
            "tittle" => "judul Post Pertama",
            "slug" => "judul-Post-Pertama",
            "author" => " spongebob",
            "body" => " Organisasi atau pertubuhan (bahasa Belanda: organisatie) merupakan sekumpulan dua orang atau lebih yang berkumpul dalam wadah yang sama dan memiliki satu tujuan. 
            sumber daya baik dengan metode, material, lingkungan dan uang serta sarana dan prasarana, dan lain sebagainya dengan efisien dan efektif untuk bisa mencapai tujuan organisasi.
            [1]Dalam lingkup ilmu-ilmu sosial, organisasi dipelajari sebagai objek penelitian oleh antara lain ilmu sosiologi, ekonomi, politik, psikologi, antropologi, sejarah, 
            dan manajemen."
        ],
        [
            "tittle" => "judul Post kedua",
            "slug" => "judul-Post-kedua",
            "author" => " patrick",
            "body" => "Components and slots provide similar benefits to sections, layouts, and includes; however, some may find the mental model of components and slots easier to understand. There are two approaches to writing components: class based components and anonymous components.."
        ]
    ];

    return view('posts', [
        "title" => "Post",
        "posts" =>$blog_post
    ]);
});



//halaman single post
Route::get('posts/{slug}', function($slug){
    return view('post',[
        "title" => "Single Post"
    ]);
});
