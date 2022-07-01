<?php

use App\Models\Post;
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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => " Iffat Haikal",
        "email" => "iffathaikal7@gmail.com",
        "image" => "pewbg.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul POst PErtama",
            "slug" => "judul-post-pertama",
            "author" => "Iffat H",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis minus temporibus, non ab ducimus reiciendis impedit iusto consectetur libero accusamus eum, neque iure nihil expedita laborum sed eius in atque eos ratione fuga architecto aliquid. Magnam rem adipisci temporibus similique doloremque tenetur aperiam quis dolor, facere perspiciatis? Eveniet nobis error deleniti sed rem aut, adipisci possimus, ad praesentium, in assumenda dignissimos? Sit, tenetur vero impedit, aliquam harum dolorum alias voluptates blanditiis unde quod ipsam reiciendis deleniti architecto porro repellendus asperiores?"
        ],
        [
            "title" => "Judul POst KEdua",
            "slug" => "judul-post-kedua",
            "author" => "Afif Fah",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt placeat doloremque distinctio, reiciendis corrupti quia aliquid facere aperiam, nihil dolorum at beatae voluptatem eaque doloribus libero autem quasi cum illum sit neque odio eligendi iste sunt ratione? Quasi, rerum reprehenderit? Quia amet neque soluta minima consequatur vero, odit excepturi alias eligendi impedit dicta sit labore provident exercitationem aliquam molestias? Dicta unde ipsam molestias temporibus suscipit hic, qui saepe adipisci, eaque enim provident autem pariatur, ab accusantium quis iusto. Pariatur corrupti eos ab sed. Ratione vero saepe perferendis, voluptate, placeat non sit numquam animi hic a, necessitatibus magni minus facilis distinctio.?"
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts,

    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        "title" => "Posts",
        "posts" => Post::all()
    ]);
});

// halaman single post
Route::get('posts/{slug}', function ($slug) {



    return view('post', [
        "title" => "Single Post",
        "post" => Post::find($slug)
    ]);
});
