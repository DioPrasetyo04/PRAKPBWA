<x-app-layout>
    {{-- <x-slot name="tittle">Dashboard</x-slot> --}}
    @slot('tittle', 'Home')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <main>
        <x-main-container>
            <div class="p-6 text-gray-900 dark:text-gray-100">
                {{ __("Home Page") }}
            </div>
        </x-main-container>
    </main>
</x-app-layout>
