<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Industry;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Industry::insert([
            ['name' => "Audiowizualna"],
            ['name' => "Budowlana"],
            ['name' => "Ceramiczno-szklarska"],
            ['name' => "Chemiczna"],
            ['name' => "Drzewno-meblarska"],
            ['name' => "Ekonomiczna-administracyjna"],
            ['name' => "Elektroenergetyczna"],
            ['name' => "Elektroniczno-mechatroniczna"],
            ['name' => "Fryzjersko-kosmetyczna"],
            ['name' => "Górniczo-wiertnicza"],
            ['name' => "Handel"],
            ['name' => "Hotelarsko-gastronomiczno-turystyczna"],
            ['name' => "Leśna"],
            ['name' => "Mechaniczna"],
            ['name' => "Mechanika-precyzyjna"],
            ['name' => "Metalurgiczna"],
            ['name' => "Motoryzacyjna"],
            ['name' => "Ochrona i bezpieczeństwo"],
            ['name' => "Ogrodnicza"],
            ['name' => "Opieka zdrowotna"],
            ['name' => "Poligrafia"],
            ['name' => "Pomoc społeczna"],
            ['name' => "Przemysł mody"],
            ['name' => "Rolno-hodowlana"],
            ['name' => "Rybacka"],
            ['name' => "Spedycyjno-logistyczna"],
            ['name' => "Spożywcza"],
            ['name' => "Teleinformatyczna"],
            ['name' => "Transport drogowy"],
            ['name' => "Transport kolejowy"],
            ['name' => "Transport lotniczny"],
            ['name' => "Transport wodny"],
        ]);
    }
}
