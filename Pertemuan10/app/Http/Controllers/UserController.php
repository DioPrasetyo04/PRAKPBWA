<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\User;

use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index(){
    // menampilkan data dari table php ke dalam view 
    // $users = DB::table('users')->where('email','like', '%@gmail.com')
    // // ->orderBy('created_at', 'desc')
    // // ->latest('created_at')
    // oldest digunakan untuk menampilkan data secara ascending dari database
    // ->oldest('created_at')
    // first digunakan untuk menampilkan data secara berurutan menaik ascending
    // ->first();
    // dd($users);
    
    // Menggunakan model untuk menampilkan data dari database
        // return User::findMany([1]);
        // alternatif untuk menampilkan kolom email dengan nama email 
        // return User::query()->firstWhere('email', 'DitaAyu29@gmail.com');

        // untuk menampilkan data dalam database yang terdapat data tablenya
        // return User::query()
        // // ->where('email', 'DitaAyu29@gmail.com')
        // ->latest()
        // ->get();
        // // mapping untuk menampilkan data menurut kriteria tertentu saja
        // // ->map(fn($user) => [
        // //    'name' => $user->name  
        // // ]);
        // menampilkan table article yang ada datanya didalam database
        // return DB::table('articles') 
        // // untuk menampilkan beberapa kolom saja
        // ->select('title', 'slug', 'id')
        // -> get();

        $users = User::query()->oldest()->get();

        return view('users.index', [
            'users' => $users
        ]);
    }


    public function create(){
        return view('users.form',[
            'user' => new User(),
            'page_meta' => [
                'title' => 'Create new user',
                'method' => 'post',
                'url' => route('users.store'),
                'submit_text' => 'Create'
            ]
        ]);
    }

    public function store(UserRequest $request)
    {
        // menampilkan hanya 3 atribut yaitu name, email, dan password
        // dd($request->only('name', 'email', 'password'));
        

        User::create($request->validated());
        return to_route('users.index');
    }

    public function show(User $user){
        return view('users.show',[
            'user' => $user
        ]);
    }

    public function edit(User $user){
        return view('users.form',[
            'user' => $user,
            'page_meta' => [
                'title' => 'Edit User: ' . $user->name,
                'method' => 'put',
                'url' => route('users.update', $user),
                'submit_text' => 'Update'
            ],
        ]);
    }

    public function update(UserRequest $request, User $user){
        // memanggil function request validate dari function request validate yang memliki nilai balik data
        $user->update($request->validated());

        return to_route('users.index');
    }

    // mmebuat function dengan tipe protected untuk memiliki nilai balik berupa kriteria name, email, dan password
    // protected function requestValidated(){
    //     return [
    //         'name' => ['required', 'min:3', 'max:255', 'string'],
    //         'email' => ['required', 'email'],
    //         'password' => ['required', 'min:8']
    //     ];
    // }

    // function untuk menghapus data dalam sistem dan database
    public function destroy(User $user){
        $user->delete();
        // return redirect(route('users.index')); 
        return to_route('users.index') ; 
    }
}
