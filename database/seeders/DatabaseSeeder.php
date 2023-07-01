<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
         \App\Models\Product::factory(20)->create();

        $user =  \App\Models\User::factory()->create([
             'name' => 'Peter',
             'email' => 'peter@mpknails.de',
             'password' => bcrypt('Melanie37!')
         ]);
         $user->assignRole('admin');

        $user2 = \App\Models\User::factory()->create([
            'name' => 'Melanie',
            'email' => 'info@mpknails.de',
            'password' => bcrypt('schimmle')
        ]);
        $user2->assignRole('reader');

         \App\Models\Category::factory()->create([
            'name' => 'Test1'
        ]);

        
    }
}
