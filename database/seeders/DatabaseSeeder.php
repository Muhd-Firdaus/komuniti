<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Bil;
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

        for ($i=1; $i < 10; $i++) { 
            Bil::create([
                'rumah_id' => '1',
                'caj' => '20',
                'tunggakan' => '0',
                'tarikh_bil' => '2023-0'.$i.'-01',
                'status' => '1',
            ]);
        }
    }
}
