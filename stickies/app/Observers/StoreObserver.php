<?php

namespace App\Observers;

use App\Models\Store;

class StoreObserver
{
    // function yang digunakan ketika data ingin dimasukkan kedalam database setelah divalidasi data dimasukkan kedalam sini agar sesuai dengan fillable yg dimasukkan kedalam model
    public function creating(Store $store):void {
        $store->slug = Str()->slug($store->name);
    }

    // function yang digunakan ketika data sudah dimasukkann kedalam database
    public function created(){

    }
}
