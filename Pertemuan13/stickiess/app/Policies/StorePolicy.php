<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Store;
use Illuminate\Auth\Access\Response;

class StorePolicy
{
    /**
     * Create a new policy instance.
     */
    // public function update(User $user, Store $store): Response {
    //     return $user->id === $store->user_id ? Response::allow() : Response::deny('You do not own this store.');
    // }

    // public function update(User $user, Store $store): Response {
    //     return $user->id === $store->user_id ? Response::allow() : Response::denyAsNotFound();
    // }
    public function update(User $user, Store $store): bool {
        return $user->id === $store->user_id;
    }

    public function destroy(User $user, Store $store): bool {
        return $user->id === $store->user_id;
    }
}
