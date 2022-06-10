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
    return view('posts', array(
        'posts' => Post::all()
    ));
    //use array map for efficiency
//    $posts = array_map(function ($file) {
//        $document = YamlFrontMatter::parseFile($file);
//        return new Post(
//            $document->title,
//            $document->excerpt,
//            $document->date,
//            $document->body(),
//            $document->slug
//        );
//    }, $files);

});

Route::get('post/{post:slug}', function (Post  $post) {
    // Find a post by its slug and pass it to a view called "Post"
    return view('post', [
        'post' => $post
    ]);
});
