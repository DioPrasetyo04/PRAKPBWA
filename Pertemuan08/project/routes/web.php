<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers;

 

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

Route::get('/about', [Controllers\AboutController::class, 'index']);
 
Route::get('/contact', [Controllers\ContactController::class, 'index']);

Route::get('/galery', fn() => view('galery'))->name('galery');

// alternatif 1: inisialisasi variable users untuk membuat sebuah array di browser
Route::get('users', function(){
    $users = [
        ['id' => 1, "name" => 'John Doe', "gmail" => 'jhonedoe@gmail.com'],
        ['id' => 2, "name" => 'Jane Doe', "gmail" => 'janedoe@gmail.com'],
    ];

    // mengembalikan variable user untuk ditampilkan dalam bentuk array 2d
    // return $users;

    return view('users.index', compact('users')); 
});

// alternatif 2: inisialisasi untuk membuat array dari alamat browser users 
// Route::get('users', function(){
//     return [
//         ['id' => 1, "name" => 'John Doe'],
//         ['id' => 2, "name" => 'Jane Doe'],
//     ];
// });