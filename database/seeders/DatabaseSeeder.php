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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->categories();
        $this->users();
    }

    private function categories() {
        \App\Models\Category::create(['name' => 'Esteri']);
        \App\Models\Category::create(['name' => 'Politica']);
        \App\Models\Category::create(['name' => 'Sport']);
        \App\Models\Category::create(['name' => 'Economia']);
    }

    private function users() {

        \App\Models\User::create([
            'name' => 'Giuseppe',
            'email' => 'giuseppe@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('28488567'),
        ]);
    }

}
