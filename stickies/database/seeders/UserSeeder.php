<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fields = [
            ['name' => 'indah', 'email' => 'Angelica17@gmail.com', 'password' => Hash::make('Indah12345678'), 'email_verified_at' => NOW()],
            ['name' => 'dita', 'email' => 'dita29@gmail.com', 'password' => Hash::make('Dita12345678'), 'email_verified_at' => NOW()],
            ['name' => 'ray', 'email' => 'ray30@gmail.com', 'password' => Hash::make('Ray12345678'), 'email_verified_at' => NOW()],
            ['name' => 'dio', 'email' => 'dio04@gmail.com', 'password' => Hash::make('Dio12345678'), 'email_verified_at' => NOW()],
        ];

        foreach($fields as $field){
            User::create([
                'name' => $field['name'],
                'email' => $field['email'],
                'password' => $field['password'],
                'email_verified_at' => NOW()
            ]);
        }
    }
}
