<x-app-layout>

    @slot('title', 'Stores')

    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Stores') }}
        </h2>
    </x-slot>

    <x-container>
       <div class="grid grid-cols-4 gap-6">
            @foreach ($stores as $store)
            <x-card class="relative p-6">
                <a href="{{ route('stores.show', $store) }}" class="absolute inset-0 size-full"></a>
                <div class="p-10">
                    @if ($store->logo)
                        <img src="{{ Storage::url($store->logo) }}" alt="{{ $store->name }}" class="size-16 rounded-lg">
                    @else
                        <div class="size-25 rounded-lg bg-zinc-700">
                            <p class="text-red-500 text-center font-semibold">Gambar tidak ada</p>
                        </div>
                    @endif
                </div>
                <x-card.header>
                    <x-card.title>{{ $store->name }}</x-card.title>
                    <x-card.description>
                        {{ str($store->description)->limit() }}
                    </x-card.description>
                </x-card.header>
                <div class="justify-content-between">
                    @auth
                        @if ($store->user_id === auth()->user()->id)
                            <a href="{{ route('stores.edit', $store) }}" class="underline text-blue-600">Edit</a>
                        @endif
                    @endauth
                </div>
            </x-card>

            {{-- <x-stores.item :$store></x-stores.item> --}}
            @endforeach
       </div>
       <div class="mt-8">
            {{ $stores->links() }}
       </div>
    </x-container>
</x-app-layout>
