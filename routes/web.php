<?php

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
    return view('welcome');
});

//une route sans aucun traitement, ni passage de paramétre
// Route::view('/','welcome');

Route::get('/about', function () {
    return view('about');
});

//segment statis et segment dynamique
//segment optionel avec valeur par défaut
Route::get('/posts/{id}/{author?}', function ($id, $author='yassine') {
    $posts = [
        1 => ['title'=>'learn angular 8'],
        2 => ['title'=>'<a href="https://www.youtube.com/">learn laravel 6</a>'],
    ];
    return view('posts.show', [
        'data' => $posts[$id], 
        'author' => $author  //'author' la variable que je vais récéptionné dans la vue.
        ]);
});


//pascal case HomeController