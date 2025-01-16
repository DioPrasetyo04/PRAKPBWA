<x-app-layout>
    @slot('title', 'My Stores')

    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('My Stores') }}
        </h2>
    </x-slot>

    <x-container>
        @if ($stores->isEmpty())
            <p class="text-red-400">
                You haven't made any store yet.
            </p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($stores as $store)
                    {{-- <x-card class="p-5">
                        <x-card.header>
                            <div class="flex items-center">
                                <img 
                                    src="{{ $store->logo ? asset($store->logo) : asset($store->logo) }}" 
                                    alt="{{ $store->name }}" 
                                    class="w-20 h-20 object-cover rounded-full">
                                <div class="ml-4">
                                    <x-card.title>{{ $store->name }}</x-card.title>
                                    <x-card.description>{{ $store->description }}</x-card.description>
                                </div>
                            </div>
                        </x-card.header>
                        <x-card.content>
                            <div class="flex justify-between items-center">
                                <x-badge>
                                    <section>
                                        {{ $store->status }}
                                    </section>
                                </x-badge>
                                <section>Created at {{ $store->user->name }}</section>
                            </div>
                        </x-card.content>
                    </x-card> --}}
                    <x-stores.item :$store></x-stores.item>
                @endforeach
            </div>
        @endif
    </x-container>
</x-app-layout>
