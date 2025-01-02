<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Store;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pastikan sudah ada user yang tersedia
        $users = User::all();

        $fields = [
            ['logo' => 'image/stores/indah.jpg', 'name' => 'Kaka pertama', 'description' => 'keren'],
            ['logo' => 'image/stores/dita.jpg', 'name' => 'Kaka Kedua', 'description' => 'keren'],
            ['logo' => 'image/stores/ray.jpg', 'name' => 'Kaka Sepupu', 'description' => 'Keren'],
            ['logo' => 'image/stores/dio.jpg', 'name' => 'Saya', 'description' => 'Keren'],
        ];

        // Jika tidak ada user, buat terlebih dahulu
        // if ($users->isEmpty()) {
        //     $users = User::factory(count($fields))->create();
        // }

        foreach($fields as $field){
            Store::create([
                'user_id' => $users['user_id'], // Gunakan user secara bergantian
                'logo' => $field['logo'],
                'name' => $field['name'],
                'description' => $field['description'],
            ]);
        }   
    }
}