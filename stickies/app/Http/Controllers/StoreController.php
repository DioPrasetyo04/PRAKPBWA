<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Store $store)
    {
        return view('store.index', [
            'stores' => $store::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('store.create', [
        'page_meta' => [
            'tittle' => 'Create A New Store',
            'description' => 'You Can Create A New Store',
            'method' => 'post',
            'url' => route('store.store'),
        ]
       ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

        $file = $request->file('logo');
        // cara menginput data kedalam database yang berelasi tapi memakai image tidak boleh digabungkan dengan input file lainnya dan haarus menggunakan three dot untuk menyimpan image
        $request->user()->store()->create([
            ...$request->validated(),
            ...['logo' => $file->store('image/stores')],
        ]);

        return to_route('store.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Store $store)
    {
        abort_if($request->user()->isNot($store->user), 401);
        return view('store.edit',[
            'store' => $store,
            'page_meta' => [
                'tittle' => 'Edit Store',
                'description' => 'Edit Store: '. $store->name,
                'method' => 'put',
                'url' => route('store.update', $store),
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRequest $request, Store $store)
    {
        $file = $request->file('logo');
        $store->update([
            'name' => $request->name,
            'description' => $request->description,
            'logo' => $file->store('image/stores')
        ]);

        return to_route('store.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Store $store)
    {
        //
    }
}
