<?php

namespace App\Observers;

use App\Models\Store;
use App\Enums\StoreStatus;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;

class StoreObserver
{
    public function creating(Store $store)
    {
        $store->slug = Str::slug($store->name);
        $store->status = Gate::check('isAdmin') ? StoreStatus::ACTIVE : StoreStatus::PENDING;
    }
}
