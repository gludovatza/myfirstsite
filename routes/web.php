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

    //return 'Hello world';

    //return ['foo' => 'bar'];

    $username = 'Attila';
    return view('welcome', [
        'name' => $username
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/arraytest', function () {
    $tasks = [
        'Go to the store',
        'Go to the market',
        'Go to the work',
        'Task #4'
    ];

    $foobar = 'foobar';

    // return view('arraytest')->withTasks($tasks)->withFoo($foobar);

    return view('arraytest')->with([
        'foo' => $foobar,
        'tasks' => $tasks
    ]);
});

Route::get('requesttest', function () {
    return view('requesttest', [
        'title' => request('title'), // példa: http://127.0.0.1:8000/?title=asdf
        'foo' => '<script>alert("foobar");</script>',
    ]);
});

Route::get('/posts/{post}', 'PostsController@show');

// Nem is feltétlenül kellene kikommentezni, mivel az iménti útvonal mentén már kiszolgálásra kerülne a felhasználói kérés
// Csak azért kommenteztem ki, nehogy ezen valaki összezavarodjon, vagy összekeverje az iméntivel.
// Route::get('/posts/{post}', function ($post) {
//     // return $post;
//     $posts = [
//         'my-first-post' => 'Hello, this is my first blog post!',
//         'my-second-post' => 'Now I am getting the hang of this blogging thing'
//     ];

//     if ( ! array_key_exists($post, $posts)) {
//         abort(404);
//     }

//     return view('post', [
//         'post' => $posts[$post] ?? 'Nothing here yet.'
//     ]);
// });
