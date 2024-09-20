<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name'=> 'admin',
            'email' => "admin@delmar.com",
            'password' => Hash::make('admin')
        ]);

        $admin->assignRole('admin');

        $editor = User::create([
            'name'=> 'editor',
            'email' => "editor@delmar.com",
            'password' => Hash::make('editor')
        ]);

        $editor->assignRole('editor');
    }
}
