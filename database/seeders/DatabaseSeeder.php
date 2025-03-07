<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Admin\Admin::create([
            'email' => 'admin@admin.com',
            'password' => Hash::make('secret'),
        ]);
        \App\Models\Teacher\Teacher::create([
            'username' => 'teacher',
            'email' => 'teacher@teacher.com',
            'password' => Hash::make('secret'),
        ]);
    }
}
