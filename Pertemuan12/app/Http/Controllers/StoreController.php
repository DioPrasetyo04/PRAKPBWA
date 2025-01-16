<?php

namespace App\Http\Controllers;

use App\Enums\StoreStatus;
use App\Models\Store;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Auth\Events\Authenticated;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

// class StoreController extends Controller implements HasMiddleware
class StoreController extends Controller
{

    // public static function middleware()
    // {
    //     return [
    //         new Middleware('auth', except: ['index']),
    //     ];
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $store = Store::query()->with('user')->where('status', StoreStatus::ACTIVE)->latest()->paginate(8);;
        return view('stores.index', [
            'stores' => $store,
        ]);
    }

    public function list()
    {
        $store = Store::query()
        // ->with('user', fn($query) => $query->select(['id', 'name']))
        ->with('user:id,name')
        ->latest()
        ->paginate(8);
        
        return view('stores.list', [
            'stores' => $store,
            'isAdmin' => auth()->user()->isAdmin(),
        ]);
    }

    public function mine(Request $request){
        $stores = Store::query()->with('user:id,name')->where('user_id', $request->user()->id)->latest()->get();
        return view('stores.mine', [
            'stores' => $stores
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stores.form', [
            'store' => new Store(),
            'page_meta' => [
                'title' => 'Create Store',
                'description' => 'Create new store for yours',
                'method' => 'POST',
                'url' => route('stores.store'),
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        
        $file = $request->file('logo');
        $request->user()->stores()->create([
            ...$request->validated(),
            ...['logo' => $file->store('images/stores')],
        ]);

        return to_route('stores.index');
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
        // abort_if($request->user()->isNot($store->user), 401);
        Gate::authorize('update', $store);

        return view('stores.form', [
            'store' => $store,
            'page_meta' => [
                'title' => 'Edit Store',
                'description' => 'Edit Store:' . ' ' . $store->name,
                'method' => 'PUT',
                'url' => route('stores.update', $store),
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRequest $request, Store $store)
    {
        if($request->hasFile('logo')) {
            Storage::delete($store->logo);
            $file = $request->file('logo')->store('images/stores');
        } else {
            $file = $store->logo;
        }

        $store->update([
            'name' => $request->name,
            'description' => $request->description,
            'logo' => $file,
        ]);
        return to_route('stores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Store $store)
    {
        //
    }

    public function approve(Store $store)
    {
        $store->status = StoreStatus::ACTIVE;

        $store->save();

        return redirect()->back();
    }
}
