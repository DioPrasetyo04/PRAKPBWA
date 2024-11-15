<x-app-layout title="Create User">
   
    <x-slot name="heading">Create User</x-slot>
    {{-- untuk melihat form atau field error yang terjadi dalam bentuk json --}}
    {{-- @dump($errors); --}}
    <form action="/users" method="POST" class="bg-blue border px-3 py-3 rounded space-y-6 shadow-md" novalidate>
            {{-- harus digunakan untuk memvalidasi data form agar form dapat diinput --}}
            @csrf
            <div>
                <label for="name">Name :</label>
                <input class="border px-4 py-2 rounded block w-full" type="text" name="name" id="name">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="email">Email :</label>
                <input class="border px-4 py-2 rounded block w-full" type="email" name="email" id="email">
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
            <x-button class="bg-blue-500 hover:bg-yellow-600 text-white font-medium px-4 py-2 rounded w-full">Create</x-button>
    </form>

</x-app-layout>