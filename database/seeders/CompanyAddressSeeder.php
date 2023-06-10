<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CompanyAddress;

class CompanyAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanyAddress::insert([
            [
                'company_id' => '1',
                'voivodeship_id' => '5',
                'city' => 'Łódź',
                'street' => 'Piotrkowska',
                'building_number' => '100',
                'zip_code' => '90-001',
            ],
            [
                'company_id' => '2',
                'voivodeship_id' => '12',
                'city' => 'Katowice',
                'street' => 'Dąbrowskiego',
                'building_number' => '20',
                'zip_code' => '40-001',
            ],
            [
                'company_id' => '3',
                'voivodeship_id' => '7',
                'city' => 'Warszawa',
                'street' => 'Marszałkowska',
                'building_number' => '30',
                'zip_code' => '00-001',
            ],
            [
                'company_id' => '4',
                'voivodeship_id' => '15',
                'city' => 'Poznań',
                'street' => 'Wielka',
                'building_number' => '40',
                'zip_code' => '60-001',
            ],
            [
                'company_id' => '5',
                'voivodeship_id' => '6',
                'city' => 'Kraków',
                'street' => 'Krakowska',
                'building_number' => '50',
                'zip_code' => '30-001',
            ],
            [
                'company_id' => '6',
                'voivodeship_id' => '11',
                'city' => 'Gdańsk',
                'street' => 'Długa',
                'building_number' => '60',
                'zip_code' => '80-001',
            ],
            [
                'company_id' => '7',
                'voivodeship_id' => '13',
                'city' => 'Kielce',
                'street' => 'Sienkiewicza',
                'building_number' => '70',
                'zip_code' => '25-001',
            ],
            [
                'company_id' => '8',
                'voivodeship_id' => '1',
                'city' => 'Wrocław',
                'street' => 'Rynek',
                'building_number' => '80',
                'zip_code' => '50-001',
            ],
            [
                'company_id' => '9',
                'voivodeship_id' => '4',
                'city' => 'Zielona Góra',
                'street' => 'Słowiańska',
                'building_number' => '90',
                'zip_code' => '65-001',
            ],
            [
                'company_id' => '10',
                'voivodeship_id' => '3',
                'city' => 'Lublin',
                'street' => 'Krakowskie Przedmieście',
                'building_number' => '100',
                'zip_code' => '20-001',
            ],
            [
                'company_id' => '11',
                'voivodeship_id' => '14',
                'city' => 'Olsztyn',
                'street' => 'Kościuszki',
                'building_number' => '110',
                'zip_code' => '10-001',
            ],
            [
                'company_id' => '12',
                'voivodeship_id' => '8',
                'city' => 'Opole',
                'street' => 'Piastowska',
                'building_number' => '120',
                'zip_code' => '45-001',
            ],
            [
                'company_id' => '13',
                'voivodeship_id' => '16',
                'city' => 'Szczecin',
                'street' => 'Wojska Polskiego',
                'building_number' => '130',
                'zip_code' => '70-001',
            ],
            [
                'company_id' => '14',
                'voivodeship_id' => '10',
                'city' => 'Białystok',
                'street' => 'Lipowa',
                'building_number' => '140',
                'zip_code' => '15-001',
            ],
            [
                'company_id' => '15',
                'voivodeship_id' => '9',
                'city' => 'Rzeszów',
                'street' => 'Rejtana',
                'building_number' => '150',
                'zip_code' => '35-001',
            ],
            [
                'company_id' => '16',
                'voivodeship_id' => '2',
                'city' => 'Bydgoszcz',
                'street' => 'Jagiellońska',
                'building_number' => '160',
                'zip_code' => '85-001',
            ],
            [
                'company_id' => '17',
                'voivodeship_id' => '16',
                'city' => 'Koszalin',
                'street' => 'Władysława IV',
                'building_number' => '170',
                'zip_code' => '75-001',
            ],
            [
                'company_id' => '18',
                'voivodeship_id' => '8',
                'city' => 'Kędzierzyn-Koźle',
                'street' => 'Kościuszki',
                'building_number' => '180',
                'zip_code' => '47-001',
            ]
        ]);
    }
}
