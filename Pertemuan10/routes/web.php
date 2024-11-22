<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers;
use App\Http\Controllers\UserController;

// alternatif 1 dalam routing untuk menampilkan view
// Route::get('/', function () {
//     return view('home');
// });

// alternatif 2 dalam routing 
// Route::view('/', 'home');

// alternatif 3 dalam routing
// Route::get('/', function(){
//     return view('home');
// })->name('home');

// alternatif 3 dalam routing
Route::get('/', Controllers\HomeController::class);

Route::get('/about-us', [Controllers\AboutController::class, 'index'])->name('about');
 
Route::get('/contact', [Controllers\ContactController::class, 'index'])->name('contact');

Route::get('/galery', [Controllers\GaleryController::class, 'index'])->name('galery');

// alternatif 1: inisialisasi variable users untuk membuat sebuah array di browser
// Route::get('users', function(){
//     $users = [
//         ['id' => 1, "name" => 'John Doe', "gmail" => 'jhonedoe@gmail.com'],
//         ['id' => 2, "name" => 'Jane Doe', "gmail" => 'janedoe@gmail.com'],
//     ];

//     // mengembalikan variable user untuk ditampilkan dalam bentuk array 2d
//     // return $users;

//     return view('users.index', compact('users')); 
// });

// alternatif 2: inisialisasi untuk membuat array dari alamat browser users 
// Route::get('users', function(){
//     return [
//         ['id' => 1, "name" => 'John Doe'],
//         ['id' => 2, "name" => 'Jane Doe'],
//     ];
// });

Route::resource('users', Controllers\UserController::class)->middleware('auth');

// Route::get('/users', [Controllers\UserController::class, 'index'])->name('users.index');

// Route::get('/users/create', [Controllers\UserController::class, 'create'])->name('users.create');

// router untuk menambahkan data article kedalam database
// Route::get('articles/create', function(){
//     \App\Models\Article::create([
//         'title' => $title = 'My First article',
//         'slug' => $slug = 'This is slug my first articles',
//         'body' => $body = 'This is the body of my first article',
//         'teaser' => $teaser = str($body)->limit(160),
//         'meta_title' => $title,
//         'meta_description' => $teaser,

//     ]);
// });

// route untuk post atau memasukkan data kedalam database data user
// Route::post('/users', [Controllers\UserController::class, 'store'])->name('users.store');

// Route::get('/users/{user:id}', [Controllers\UserController::class, 'show'])->name('users.show');

// Route::get('/users/{user:id}/edit', [Controllers\UserController::class, 'edit'])->name('users.edit');

// Route::put('/users/{user:id}', [Controllers\UserController::class, 'update'])->name('users.update');

// Route::delete('/users/{user:id}', [Controllers\UserController::class, 'destroy'])->name('users.destroy');

Route::get('login', [Controllers\LoginController::class, 'loginform'])->name('login')->middleware('guest');

Route::post('login', [Controllers\LoginController::class, 'authenticate'])->name('login')->middleware('guest');

Route::post('logout', Controllers\LogoutController::class)->name('logout')->middleware('auth');