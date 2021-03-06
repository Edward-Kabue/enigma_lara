<?php

use App\Models\Category;
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
        'posts' => Post::latest()->with('category')->get()
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

Route::get ('categories/{category:slug}',function (Category $category) {
    return view( 'posts',[
        'posts' => $category->posts
        ]);
});
