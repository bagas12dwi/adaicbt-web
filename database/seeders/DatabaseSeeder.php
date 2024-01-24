<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Task;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Task::create([
            'name' => 'Psikoedukasi'
        ]);
        Task::create([
            'name' => 'Latihan Relaksasi'
        ]);
        Task::create([
            'name' => 'Restrukturisasi Kognitif'
        ]);
        Task::create([
            'name' => 'Terapi Perilaku'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
