<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\{UserSeeder, CategorySeeder, TaskSeeder};
use App\Models\{User, Category, Task};
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // $this->call([
        //     UserSeeder::class,
        //     CategorySeeder::class,
        //     TaskSeeder::class,
        // ]);
        
        User::factory(10)->create();
        Category::factory(10)->create();
        Task::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
