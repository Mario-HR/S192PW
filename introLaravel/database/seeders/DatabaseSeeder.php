<?php

namespace Database\Seeders;

use App\Model\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    // Seed the application's database.
     
    public function run(): void
    {
        $this->call(ClienteTableSeeder::class);
    //     \App\Models\User::factory(10)->create();

    //     \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //          'email' => 'test@example.com',
    //     ]);
    }
}
