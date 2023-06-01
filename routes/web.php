<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;

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
    return view('list_blog',[

        'blogs'=> Blog::all(),

    ]);
});

Route::get('/blog/{blog}', function (Blog $blog){


    return view('blog',[

        'blog'=> $blog,
    ]);
});