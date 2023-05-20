<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Voivodeship;

class VoivodeshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Voivodeship::insert([
            ['name' => 'Dolnośląskie'],
            ['name' => 'Kujawsko-pomorskie'],
            ['name' => 'Lubelskie'],
            ['name' => 'Lubuskie'],
            ['name' => 'Łódzkie'],
            ['name' => 'Małopolskie'],
            ['name' => 'Mazowieckie'],
            ['name' => 'Opolskie'],
            ['name' => 'Podkarpackie'],
            ['name' => 'Podlaskie'],
            ['name' => 'Pomorskie'],
            ['name' => 'Śląskie'],
            ['name' => 'Świętokrzyskie'],
            ['name' => 'Warmińsko-mazurskie'],
            ['name' => 'Wielkopolskie'],
            ['name' => 'Zachodniopomorskie']
        ]);
    }
}
