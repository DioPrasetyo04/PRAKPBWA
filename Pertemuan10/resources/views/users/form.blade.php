<x-app-layout title="Update User: {{ $page_meta['title'] }}">
   
    <x-slot name="heading">{{ $page_meta['title'] }}</x-slot>
    {{-- untuk melihat form atau field error yang terjadi dalam bentuk json --}}
    {{-- @dump($errors); --}}
    <form action="{{ $page_meta['url'] }}" method="post" class="bg-blue border px-3 py-3 rounded space-y-6 shadow-md" novalidate>
            {{-- harus digunakan untuk memvalidasi data form agar form dapat diinput --}}
            @csrf
            {{-- method untuk from ini adalah put maka harus menggunakan @put agar terkoneksi dengan laravel --}}
            @method($page_meta['method'])
            <div>
                <label for="name">Name :</label>
                <input class="border px-4 py-2 rounded block w-full" type="text" value="{{ old('name', $user->name) }}" name="name" id="name">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="email">Email :</label>
                <input class="border px-4 py-2 rounded block w-full" type="email" value="{{ old('email', $user->email) }}" name="email" id="email">
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="password">Password :</label>
                <input class="border px-4 py-2 rounded block w-full" type="password" name="password" id="password">
                @error('password')
                     <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <x-button class="bg-blue-500 hover:bg-yellow-600 text-white font-medium px-4 py-2 rounded w-full">{{ $page_meta['submit_text'] }}</x-button>
    </form>

</x-app-layout>