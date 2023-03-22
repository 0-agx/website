<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Menu;
use App\Models\User;
use App\Models\UserGroup;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create();
        UserGroup::factory()->create();
        Menu::factory()->create();
    }
}
