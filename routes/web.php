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
    $blog_posts = [
        [
            "title" => "Artikel 1",
            "slug"=> "judul-artikel-1",
            "author" => "Arya",
            'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis porro similique
            iste, repellendus velit quas, corrupti neque facere consequuntur inventore
            aliquid aperiam perferendis molestiae qui consequatur eos ex et laudantium
            quibusdam. Natus quibusdam itaque obcaecati consequuntur aliquid incidunt beatae
            quae doloribus asperiores, consequatur, praesentium sapiente accusamus? Aperiam,
            corporis. Cupiditate culpa rem molestias, iure quidem quis ducimus eum qui
            tenetur blanditiis repudiandae ipsum dignissimos placeat fugiat voluptatum
            laboriosam fugit doloribus. Veniam eligendi tenetur dolore ipsa voluptatibus
            cupiditate minima officia voluptas eius ex quo soluta, eum earum veritatis
            assumenda. Consequuntur eius in velit possimus dolor earum repellat voluptate
            rerum. Quas, laboriosam aliquid."
        ],
        [
            "title" => "Artikel 2",
            "slug"=> "judul-artikel-2",
            "author" => "Mahira",
            'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis porro similique
            iste, repellendus velit quas, corrupti neque facere consequuntur inventore
            aliquid aperiam perferendis molestiae qui consequatur eos ex et laudantium
            quibusdam. Natus quibusdam itaque obcaecati consequuntur aliquid incidunt beatae
            quae doloribus asperiores, consequatur, praesentium sapiente accusamus? Aperiam,
            corporis. Cupiditate culpa rem molestias, iure quidem quis ducimus eum qui
            tenetur blanditiis repudiandae ipsum dignissimos placeat fugiat voluptatum
            laboriosam fugit doloribus. Veniam eligendi tenetur dolore ipsa voluptatibus
            cupiditate minima officia voluptas eius ex quo soluta, eum earum veritatis
            assumenda. Consequuntur eius in velit possimus dolor earum repellat voluptate
            rerum. Quas, laboriosam aliquid."
        ],
        [
            "title" => "Artikel 3",
            "slug"=> "judul-artikel-3",
            "author" => "Budi",
            'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis porro similique
            iste, repellendus velit quas, corrupti neque facere consequuntur inventore
            aliquid aperiam perferendis molestiae qui consequatur eos ex et laudantium
            quibusdam. Natus quibusdam itaque obcaecati consequuntur aliquid incidunt beatae
            quae doloribus asperiores, consequatur, praesentium sapiente accusamus? Aperiam,
            corporis. Cupiditate culpa rem molestias, iure quidem quis ducimus eum qui
            tenetur blanditiis repudiandae ipsum dignissimos placeat fugiat voluptatum
            laboriosam fugit doloribus. Veniam eligendi tenetur dolore ipsa voluptatibus
            cupiditate minima officia voluptas eius ex quo soluta, eum earum veritatis
            assumenda. Consequuntur eius in velit possimus dolor earum repellat voluptate
            rerum. Quas, laboriosam aliquid."
        ],
    ];
    
    return view('index', [
        "title" => "Beranda",
        "posts" => $blog_posts
    ]);
});


Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Artikel 1",
            "slug"=> "judul-artikel-1",
            "author" => "Arya",
            'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis porro similique
            iste, repellendus velit quas, corrupti neque facere consequuntur inventore
            aliquid aperiam perferendis molestiae qui consequatur eos ex et laudantium
            quibusdam. Natus quibusdam itaque obcaecati consequuntur aliquid incidunt beatae
            quae doloribus asperiores, consequatur, praesentium sapiente accusamus? Aperiam,
            corporis. Cupiditate culpa rem molestias, iure quidem quis ducimus eum qui
            tenetur blanditiis repudiandae ipsum dignissimos placeat fugiat voluptatum
            laboriosam fugit doloribus. Veniam eligendi tenetur dolore ipsa voluptatibus
            cupiditate minima officia voluptas eius ex quo soluta, eum earum veritatis
            assumenda. Consequuntur eius in velit possimus dolor earum repellat voluptate
            rerum. Quas, laboriosam aliquid."
        ],
        [
            "title" => "Artikel 2",
            "slug"=> "judul-artikel-2",
            "author" => "Mahira",
            'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis porro similique
            iste, repellendus velit quas, corrupti neque facere consequuntur inventore
            aliquid aperiam perferendis molestiae qui consequatur eos ex et laudantium
            quibusdam. Natus quibusdam itaque obcaecati consequuntur aliquid incidunt beatae
            quae doloribus asperiores, consequatur, praesentium sapiente accusamus? Aperiam,
            corporis. Cupiditate culpa rem molestias, iure quidem quis ducimus eum qui
            tenetur blanditiis repudiandae ipsum dignissimos placeat fugiat voluptatum
            laboriosam fugit doloribus. Veniam eligendi tenetur dolore ipsa voluptatibus
            cupiditate minima officia voluptas eius ex quo soluta, eum earum veritatis
            assumenda. Consequuntur eius in velit possimus dolor earum repellat voluptate
            rerum. Quas, laboriosam aliquid."
        ],
        [
            "title" => "Artikel 3",
            "slug"=> "judul-artikel-3",
            "author" => "Budi",
            'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis porro similique
            iste, repellendus velit quas, corrupti neque facere consequuntur inventore
            aliquid aperiam perferendis molestiae qui consequatur eos ex et laudantium
            quibusdam. Natus quibusdam itaque obcaecati consequuntur aliquid incidunt beatae
            quae doloribus asperiores, consequatur, praesentium sapiente accusamus? Aperiam,
            corporis. Cupiditate culpa rem molestias, iure quidem quis ducimus eum qui
            tenetur blanditiis repudiandae ipsum dignissimos placeat fugiat voluptatum
            laboriosam fugit doloribus. Veniam eligendi tenetur dolore ipsa voluptatibus
            cupiditate minima officia voluptas eius ex quo soluta, eum earum veritatis
            assumenda. Consequuntur eius in velit possimus dolor earum repellat voluptate
            rerum. Quas, laboriosam aliquid."
        ],
    ];

    $new_post =[];
    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Detail Artikel",
        "post" => $new_post
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "Tentang Kami"
    ]);
});
Route::get('/category', function () {
    return view('category',[
        "title" => "Kategori"
    ]);
});

