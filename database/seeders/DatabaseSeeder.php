<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('password'),
        //     'role' => 'admin'
        // ]);

        // User::create([
        //     'name' => 'user',
        //     'email' => 'user@gmail.com',
        //     'password' => bcrypt('password'),
        //     'role' => 'user'
        // ]);

        // User::create([
        //     'name' => 'editor',
        //     'email' => 'editor@gmail.com',
        //     'password' => bcrypt('password'),
        //     'role' => 'editor'
        // ]);

       Post::factory(10)->create();


    }
}
