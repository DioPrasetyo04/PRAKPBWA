<x-app-layout>
    @slot('tittle', 'Stores');
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Store') }}
        </h2>
    </x-slot>

        <main>
            <div class="lg:px-8 lg:py-0 md:px-4 md:py-0 sm:px-2 sm:py-2 mx-auto max-w-screen-xl">
                <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-6">
                    @foreach ($stores as $store)
                    <div class="h-full p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <div class="mb-4">
                            @if($store->logo)
                            <img class="w-full h-48 object-cover rounded-md" src="{{ Storage::url($store->logo) }}" alt="{{ $store->name }}">
                            @else
                            <div class="w-full h-48 bg-gray-100 flex items-center justify-center rounded-md">
                                <p class="text-red-500 font-bold">Tidak Ada Gambar</p>
                            </div>
                            @endif
                        </div>
                        <div class="flex justify-between items-center mb-5 text-gray-500">
                            <span class="bg-red-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8.032 12 1.984 1.984 4.96-4.96m4.55 5.272.893-.893a1.984 1.984 0 0 0 0-2.806l-.893-.893a1.984 1.984 0 0 1-.581-1.403V7.04a1.984 1.984 0 0 0-1.984-1.984h-1.262a1.983 1.983 0 0 1-1.403-.581l-.893-.893a1.984 1.984 0 0 0-2.806 0l-.893.893a1.984 1.984 0 0 1-1.403.581H7.04A1.984 1.984 0 0 0 5.055 7.04v1.262c0 .527-.209 1.031-.581 1.403l-.893.893a1.984 1.984 0 0 0 0 2.806l.893.893c.372.372.581.876.581 1.403v1.262a1.984 1.984 0 0 0 1.984 1.984h1.262c.527 0 1.031.209 1.403.581l.893.893a1.984 1.984 0 0 0 2.806 0l.893-.893a1.985 1.985 0 0 1 1.403-.581h1.262a1.984 1.984 0 0 0 1.984-1.984V15.7c0-.527.209-1.031.581-1.403Z"/>
                                </svg>
                                <a class="hover:underline" href="#">{{ $store->user->name }}</a>
                            </span>
                            <span class="text-sm">{{ (new \Carbon\Carbon ($store->created_at))->format('d F Y') }}</span>
                        </div>
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a class="hover:underline" href="#">{{ $store->name }}</a></h2>
                        <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ $store->description }}</p>
                        <div class="flex justify-between items-center mt-auto">
                            <div class="flex items-center space-x-4">
                                <img class="w-7 h-7 rounded-full" src="{{ Storage::url($store->logo) }}" alt="{{ $store->user->name }}" />
                                <a class="hover:underline" href="/authors/{{ $store->user->username }}">
                                    <span class="font-medium text-xs dark:text-white">
                                        {{ $store->user->name }}
                                    </span>
                                </a>
                            </div>
                            @if ($store->user_id === auth()->user()->id)
                                <a href="{{ Route('store.edit', $store)}}" class="underline text-blue-600">Edit</a>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </main>
</x-app-layout>
