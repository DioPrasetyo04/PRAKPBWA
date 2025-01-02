<?php

namespace App\Models;

use App\Observers\StoreObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

// menghubungkan antara model dengan store observer
#[ObservedBy(StoreObserver::class)]

class Store extends Model
{
    protected $table = 'stores';

    protected $fillable = [
        'logo',
        'name',
        'slug',
        'description'
    ];

    public function User():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
