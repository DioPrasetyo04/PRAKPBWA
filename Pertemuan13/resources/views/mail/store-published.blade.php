<x-mail::message>
# Store Published

Your Store {{ $store->name }} has been published

<x-mail::button url="{{ route('stores.show', $store) }}">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
