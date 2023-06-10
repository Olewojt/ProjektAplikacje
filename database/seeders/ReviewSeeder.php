<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::insert([
            [
                'user_id' => '1',
                'company_id' => '1',
                'title' => 'Bardzo profesjonalna firma',
                'description' => 'Jestem bardzo zadowolony z usług tej firmy. Profesjonalne podejście i doskonała obsługa klienta.',
                'rating' => '5'
            ],
            [
                'user_id' => '2',
                'company_id' => '2',
                'title' => 'Nieudane doświadczenie',
                'description' => 'Korzystałem z usług tej firmy i jestem bardzo rozczarowany. Brak profesjonalizmu i niska jakość usług.',
                'rating' => '1'
            ],
            [
                'user_id' => '3',
                'company_id' => '1',
                'title' => 'Świetne doświadczenie',
                'description' => 'Korzystałem z usług tej firmy i muszę przyznać, że było to świetne doświadczenie. Polecam!',
                'rating' => '4'
            ],
            [
                'user_id' => '4',
                'company_id' => '3',
                'title' => 'Niepolecam',
                'description' => 'Praca z tą firmą była bardzo trudna. Słaba komunikacja i brak zaangażowania ze strony pracowników.',
                'rating' => '2'
            ],
            [
                'user_id' => '5',
                'company_id' => '1',
                'title' => 'Niezawodny partner',
                'description' => 'Ta firma to niezawodny partner biznesowy. Zawsze spełnia moje oczekiwania i zapewnia wysoką jakość usług.',
                'rating' => '5'
            ],
            [
                'user_id' => '6',
                'company_id' => '4',
                'title' => 'Zła obsługa klienta',
                'description' => 'Obsługa klienta w tej firmie pozostawia wiele do życzenia. Brak odpowiedzi na pytania i problemy.',
                'rating' => '1'
            ],
            [
                'user_id' => '7',
                'company_id' => '1',
                'title' => 'Profesjonalizm na najwyższym poziomie',
                'description' => 'Firma wykazuje się profesjonalizmem na najwyższym poziomie. Zawsze mogę liczyć na ich wsparcie i fachową wiedzę.',
                'rating' => '5'
            ],
            [
                'user_id' => '8',
                'company_id' => '5',
                'title' => 'Niekompetentni pracownicy',
                'description' => 'Pracownicy tej firmy wykazują brak kompetencji. Nie potrafią sprostać wymaganiom i rozwiązać problemów.',
                'rating' => '2'
            ],
            [
                'user_id' => '9',
                'company_id' => '6',
                'title' => 'Niedopracowane usługi',
                'description' => 'Usługi tej firmy są niedopracowane i nie spełniają podstawowych standardów. Nie polecam.',
                'rating' => '1'
            ],
            [
                'user_id' => '10',
                'company_id' => '7',
                'title' => 'Wspaniała współpraca',
                'description' => 'Współpraca z tą firmą to prawdziwa przyjemność. Bardzo profesjonalne podejście i skuteczne rozwiązania.',
                'rating' => '5'
            ],
            [
                'user_id' => '11',
                'company_id' => '8',
                'title' => 'Niezadowalające efekty',
                'description' => 'Efekty pracy tej firmy są niezadowalające. Oczekiwałem więcej, ale otrzymałem słabe rezultaty.',
                'rating' => '2'
            ],
            [
                'user_id' => '12',
                'company_id' => '9',
                'title' => 'Pozytywne doświadczenie',
                'description' => 'Korzystałem z usług tej firmy i jestem zadowolony z efektów. Bardzo dobry kontakt i wysoka jakość usług.',
                'rating' => '4'
            ]
        ]);
    }
}
