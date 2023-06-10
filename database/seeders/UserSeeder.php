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
                'login' => 'jan',
                'password' => Hash::make('12345678'),
                'name' => 'Jan',
                'surname' => 'Nowak',
                'e_mail' => 'jan@nowak.pl',
                'phone_number' => '123456789',
                'privilege_id' => 2,
            ],
            [
                'login' => 'adam',
                'password' => Hash::make('12345678'),
                'name' => 'Adam',
                'surname' => 'Kowalski',
                'e_mail' => 'adam@kowalski.pl',
                'phone_number' => '987654321',
                'privilege_id' => 2,
            ],
            [
                'login' => 'andrzej',
                'password' => Hash::make('12345678'),
                'name' => 'Andrzej',
                'surname' => 'Wiśniewski',
                'e_mail' => 'andrzej@wisniewski.pl',
                'phone_number' => '567891234',
                'privilege_id' => 2,
            ],
            [
                'login' => 'marek',
                'password' => Hash::make('12345678'),
                'name' => 'Marek',
                'surname' => 'Wójcik',
                'e_mail' => 'marek@wojcik.pl',
                'phone_number' => '345678912',
                'privilege_id' => 1,
            ],
            [
                'login' => 'piotr',
                'password' => Hash::make('12345678'),
                'name' => 'Piotr',
                'surname' => 'Kowalczyk',
                'e_mail' => 'piotr@kowalczyk.pl',
                'phone_number' => '891234567',
                'privilege_id' => 1,
            ],
            [
                'login' => 'krzysztof',
                'password' => Hash::make('12345678'),
                'name' => 'Krzysztof',
                'surname' => 'Kamiński',
                'e_mail' => 'krzysztof@kaminski.pl',
                'phone_number' => '456789123',
                'privilege_id' => 0,
            ],
            [
                'login' => 'stanislaw',
                'password' => Hash::make('12345678'),
                'name' => 'Stanisław',
                'surname' => 'Lewandowski',
                'e_mail' => 'stanislaw@lewandowski.pl',
                'phone_number' => '234567891',
                'privilege_id' => 0,
            ],
            [
                'login' => 'tomasz',
                'password' => Hash::make('12345678'),
                'name' => 'Tomasz',
                'surname' => 'Zieliński',
                'e_mail' => 'tomasz@zielinski.pl',
                'phone_number' => '678912345',
                'privilege_id' => 1,
            ],
            [
                'login' => 'pawel',
                'password' => Hash::make('12345678'),
                'name' => 'Paweł',
                'surname' => 'Szymański',
                'e_mail' => 'pawel@szymanski.pl',
                'phone_number' => '123459876',
                'privilege_id' => 0,
            ],
            [
                'login' => 'robert',
                'password' => Hash::make('12345678'),
                'name' => 'Robert',
                'surname' => 'Woźniak',
                'e_mail' => 'robert@wozniak.pl',
                'phone_number' => '987612345',
                'privilege_id' => 1,
            ],
            [
                'login' => 'michal',
                'password' => Hash::make('12345678'),
                'name' => 'Michał',
                'surname' => 'Kozłowski',
                'e_mail' => 'michal@kozlowski.pl',
                'phone_number' => '345678912',
                'privilege_id' => 0,
            ],
            [
                'login' => 'jacek',
                'password' => Hash::make('12345678'),
                'name' => 'Jacek',
                'surname' => 'Krajewski',
                'e_mail' => 'jacek@krajewski.pl',
                'phone_number' => '891234567',
                'privilege_id' => 1,
            ],
            [
                'login' => 'grzegorz',
                'password' => Hash::make('12345678'),
                'name' => 'Grzegorz',
                'surname' => 'Nowicki',
                'e_mail' => 'grzegorz@nowicki.pl',
                'phone_number' => '456789123',
                'privilege_id' => 0,
            ],
            [
                'login' => 'tadeusz',
                'password' => Hash::make('12345678'),
                'name' => 'Tadeusz',
                'surname' => 'Michalski',
                'e_mail' => 'tadeusz@michalski.pl',
                'phone_number' => '234567891',
                'privilege_id' => 0,
            ],
            [
                'login' => 'mariusz',
                'password' => Hash::make('12345678'),
                'name' => 'Mariusz',
                'surname' => 'Olszewski',
                'e_mail' => 'mariusz@olszewski.pl',
                'phone_number' => '678912345',
                'privilege_id' => 0,
            ],
        ]);
    }
}
