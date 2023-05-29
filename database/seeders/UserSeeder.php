<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'login' => 'olewojt',
                'password' => Hash::make('12345678'),
                'name' => 'Wojtek',
                'surname' => 'Olejko',
                'e_mail' => 'olewojt7@onet.pl',
                'phone_number' => '123123123',
                'privilege_id' => '1',
            ],
            [
                'login' => 'vojtek',
                'password' => Hash::make('12345678'),
                'name' => 'Vojtaszek',
                'surname' => 'Olejaszek',
                'e_mail' => 'ketowojec@onet.pl',
                'phone_number' => '111222333',
                'privilege_id' => '1',
            ],
            [
                'login' => 'ewa',
                'password' => Hash::make('12345678'),
                'name' => 'Ewa',
                'surname' => 'Olejko',
                'e_mail' => 'kirbi@onet.pl',
                'phone_number' => '912332144',
                'privilege_id' => '0',
            ],
            [
                'login' => 'Tester',
                'password' => Hash::make('12345678'),
                'name' => 'Tester',
                'surname' => 'Strony',
                'e_mail' => 'pozdro@onet.pl',
                'phone_number' => '912332144',
                'privilege_id' => '0',
            ],
        ]);
    }
}
