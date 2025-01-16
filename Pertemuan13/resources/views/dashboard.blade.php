<x-app-layout>
    {{-- <x-slot name="title">
        {{ __('Dashboard') }}
    </x-slot> --}}

    @slot('title', 'Dashboard')

    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-slot name="main">
        <x-container>
            <x-card class="p-6">
                {{ __("You're Logged In!") }}
            </x-card>
        </x-container>
    </x-slot>
</x-app-layout>
