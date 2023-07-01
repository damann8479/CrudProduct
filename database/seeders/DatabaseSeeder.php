<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\Product::factory(20)->create();

         \App\Models\User::factory()->create([
             'name' => 'Peter',
             'email' => 'peter@mpknails.de',
             'password' => bcrypt('Melanie37!')
         ]);

         \App\Models\Category::factory()->create([
            'name' => 'Test1'
        ]);
    }
}
