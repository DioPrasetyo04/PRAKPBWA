<x-app-layout>
    @slot('tittle', 'Dashboard Data')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $page_meta['tittle'] }}
        </h2>
    </x-slot>

    <x-main-container class="dark:max-w-2xl">
            <x-card class="hover:bg-red-400 max-w-2xl">
                <x-card.header>
                    <x-card.tittle>{{ $page_meta['tittle'] }}</x-card.tittle>
                    <x-card.description>{{ $page_meta['description'] }}</x-card.description>
                    <x-card.content>
                        <form action="{{ $page_meta['url'] }}" method="{{ $page_meta['method'] }}" enctype="multipart/form-data" class="[&>div]:mb-6">
                            @csrf
                            <div>
                                <x-input-label for="logo" :value="__('Logo')" />
                                <input name="logo" type="file" required />
                                <x-input-error :messages="$errors->get('logo')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="block mt-1" type="text" name="name" :value="old('name')" required autofocus />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="description" :value="__('Description')" />
                                <x-text-area id="description" class="block mt-1" name="description" required autofocus>{{ old('description') }}</x-text-area>
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                            </div>
                            <x-primary-button>
                                Create
                            </x-primary-button>
                        </form>
                    </x-card.content>
                </x-card.header>
            </x-card>
    </x-main-container>
</x-app-layout> 