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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Mohamad Fidi",
        "email" => "193040129.mohammad@mail.unpas.ac.id",
        "image" => "fidi.jpeg"
    ]);
});


Route::get('/blog', function () {

    $blog_posts = [
        [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Mohamad fidi firdaus",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Maiores saepe, architecto at cupiditate quisquam laboriosam est accusantium,
         molestiae expedita unde officia hic enim possimus eaque quia temporibus nostrum perferendis! Suscipit, 
         repudiandae dicta repellendus mollitia enim maxime eveniet magni facere necessitatibus rem architecto quas doloremque reprehenderit iure possimus aspernatur! Alias ab laboriosam maiores fuga cumque odit deleniti dolores vitae natus assumenda animi, 
         inventore ad, adipisci voluptate a eius porro sit consectetur aliquid sequi officiis repudiandae quaerat voluptas vel? Veniam, quo quam?"
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Mohamad Fajar",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere aut aliquam voluptatibus, odit hic quod architecto maiores voluptas omnis, sint a. Iure totam dolore possimus. Esse culpa eveniet placeat magni eius dolores omnis rerum modi libero provident aspernatur nisi rem harum laudantium dolore ab iusto eum quod dolorem, iste odit cum? Odio debitis molestiae beatae perspiciatis saepe enim, quisquam aliquid maxime velit id! Accusantium porro iusto harum optio libero! Possimus sed facere ea obcaecati, in libero, voluptatum nobis odit neque quae doloribus. Magni cum, praesentium corrupti aut optio doloremque excepturi eius quod placeat quos fugiat qui suscipit consequatur libero nobis."
    ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


//Halaman single post

Route::get('post/{slug}', function($slug) {$blog_posts = [
    [
    "title" => "Judul Post Pertama",
    "slug" => "judul-post-pertama",
    "author" => "Mohamad fidi firdaus",
    "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Maiores saepe, architecto at cupiditate quisquam laboriosam est accusantium,
     molestiae expedita unde officia hic enim possimus eaque quia temporibus nostrum perferendis! Suscipit, 
     repudiandae dicta repellendus mollitia enim maxime eveniet magni facere necessitatibus rem architecto quas doloremque reprehenderit iure possimus aspernatur! Alias ab laboriosam maiores fuga cumque odit deleniti dolores vitae natus assumenda animi, 
     inventore ad, adipisci voluptate a eius porro sit consectetur aliquid sequi officiis repudiandae quaerat voluptas vel? Veniam, quo quam?"
],
[
    "title" => "Judul Post Kedua",
    "slug" => "judul-post-kedua",
    "author" => "Mohamad Fajar",
    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere aut aliquam voluptatibus, odit hic quod architecto maiores voluptas omnis, sint a. Iure totam dolore possimus. Esse culpa eveniet placeat magni eius dolores omnis rerum modi libero provident aspernatur nisi rem harum laudantium dolore ab iusto eum quod dolorem, iste odit cum? Odio debitis molestiae beatae perspiciatis saepe enim, quisquam aliquid maxime velit id! Accusantium porro iusto harum optio libero! Possimus sed facere ea obcaecati, in libero, voluptatum nobis odit neque quae doloribus. Magni cum, praesentium corrupti aut optio doloremque excepturi eius quod placeat quos fugiat qui suscipit consequatur libero nobis."
],
];

$new_post = [];
foreach($blog_posts as $post) {
    if($post["slug"] === $slug ) {
        $new_post = $post;
    }
}


    return view('post', [
        "title" => "Single Post"
        "post" => $new_post
    ]);
});