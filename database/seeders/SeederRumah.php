<?php

namespace Database\Seeders;

use App\Models\Rumah;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeederRumah extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=2; $i < 100; $i++) { 
            Rumah::create([
                'no_rumah' => '0'.$i,
                'jalan' => 'jalan 1',
            ]);
        }
        
    }
}
