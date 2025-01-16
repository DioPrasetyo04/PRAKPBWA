<?php

namespace Database\Seeders;

use App\Models;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $user = Models\User::create([
            'name' => 'Dio Prasetyo',
            'email' => 'dioolinger04@gmail.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ]);

        collect([
            ['name' => 'user'],
            ['name' => 'admin'],
        ])->each(function ($role) {
            Models\Role::create($role);
        });

        // $role = Models\Role::create([
        //     'name' => 'admin',
        // ]);

        Models\User::factory(10)->create();

        $user2 = Models\User::find(2);

        $user->assignRole(Role::find(1));
        $user2->assignRole(Role::find(2));
    }
}
