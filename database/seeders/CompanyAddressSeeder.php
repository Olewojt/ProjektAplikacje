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
                'city' => 'Rzeszów',
                'street' => 'Rejtana',
                'building_number' => '10',
                'zip_code' => '31-555',
            ],
            [
                'company_id' => '2',
                'voivodeship_id' => '3',
                'city' => 'Lublin',
                'street' => 'Jałowa',
                'building_number' => '15',
                'zip_code' => '22-423',
            ],
            [
                'company_id' => '3',
                'voivodeship_id' => '8',
                'city' => 'Buków',
                'street' => 'Korzenna',
                'building_number' => '53',
                'zip_code' => '55-112',
            ],
            [
                'company_id' => '4',
                'voivodeship_id' => '12',
                'city' => 'Kraków',
                'street' => 'Krokusowa',
                'building_number' => '11',
                'zip_code' => '66-232',
            ],
            [
                'company_id' => '5',
                'voivodeship_id' => '10',
                'city' => 'Zwierzyniec',
                'street' => 'Wyzwolenia',
                'building_number' => '99',
                'zip_code' => '22-390',
            ],
            [
                'company_id' => '6',
                'voivodeship_id' => '13',
                'city' => 'Kraśnik',
                'street' => 'Karasia',
                'building_number' => '12',
                'zip_code' => '22-390',
            ],
            [
                'company_id' => '7',
                'voivodeship_id' => '11',
                'city' => 'Bydgoszcz',
                'street' => 'Lipska',
                'building_number' => '104',
                'zip_code' => '22-532',
            ],
            [
                'company_id' => '8',
                'voivodeship_id' => '15',
                'city' => 'Poznań',
                'street' => 'Modrzewia',
                'building_number' => '11',
                'zip_code' => '25-134',
            ],
            [
                'company_id' => '9',
                'voivodeship_id' => '10',
                'city' => 'Zwierzyniec',
                'street' => 'Wyzwolenia',
                'building_number' => '53',
                'zip_code' => '22-390',
            ],
            [
                'company_id' => '10',
                'voivodeship_id' => '10',
                'city' => 'Wrocław',
                'street' => 'Powstańców',
                'building_number' => '105/5',
                'zip_code' => '22-246',
            ]
        ]);
    }
}
