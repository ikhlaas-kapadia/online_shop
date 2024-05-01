<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->count(10)
                    ->has(Profile::factory()
                    )
                    ->create();

                    // User::factory()
                    // ->has(Profile::factory()->count(3))->create();
    }
}
