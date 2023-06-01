<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = [
            [
                'user_id' => '1',
                'name'  => "Innowacyjne Rozwiązania",
                'description'  => "Innowacyjne Rozwiązania to czołowy dostawca nowatorskich rozwiązań dla różnych branż. Nasza firma specjalizuje się w opracowywaniu i wdrażaniu zaawansowanych technologii, które zrewolucjonizują sposób prowadzenia biznesu. Nasi eksperci są dedykowani dostarczaniu wyjątkowych rezultatów i przekraczaniu oczekiwań klientów.",
                'regon'  => "0077622308075",
                'nip'  => "505882319",
                'phone_number'  => "24266297",
                'e_mail'  => "info@innowacyjnerez.pl",
                'website' => "www.innowacyjnerez.pl",
                'industry_id'  => "2"
            ],
            [
                'user_id' => '2',
                'name'  => "Eksperci IT",
                'description'  => "Eksperci IT to renomowany zespół specjalistów z dziedziny informatyki i technologii. Nasza firma oferuje kompleksowe usługi IT, w tym tworzenie oprogramowania, zarządzanie infrastrukturą sieciową oraz wsparcie techniczne. Jesteśmy dumni z naszych innowacyjnych rozwiązań, które pomagają naszym klientom osiągać sukces w dynamicznym świecie technologii.",
                'regon'  => "1234567890123",
                'nip'  => "987654321",
                'phone_number'  => "12345678",
                'e_mail'  => "kontakt@eksperciit.pl",
                'website' => "www.eksperciit.pl",
                'industry_id'  => "7"
            ],
            [
                'user_id' => '3',
                'name'  => "Elegancka Moda",
                'description'  => "Elegancka Moda to ekskluzywny sklep z odzieżą i dodatkami dla wymagających klientów. Oferujemy szeroki wybór markowych produktów, które podkreślą Twój indywidualny styl. Nasza pasja do mody pozwala nam dostarczać produkty najwyższej jakości, które spełniają oczekiwania nawet najbardziej wymagających klientów.",
                'regon'  => "9876543210987",
                'nip'  => "123456789",
                'phone_number'  => "87654321",
                'e_mail'  => "kontakt@eleganckamoda.pl",
                'website' => "www.eleganckamoda.pl",
                'industry_id'  => "12"
            ],
            [
                'user_id' => '4',
                'name'  => "Twórcze Studio",
                'description'  => "Twórcze Studio to zespół pasjonatów sztuki i designu. Jesteśmy specjalistami w tworzeniu unikalnych projektów graficznych, identyfikacji wizualnej i interaktywnych stron internetowych. Nasza kreatywność i profesjonalizm pozwalają nam dostarczać klientom rozwiązania, które wyróżniają się na rynku i przyciągają uwagę.",
                'regon'  => "7654321098765",
                'nip'  => "987654321",
                'phone_number'  => "56789012",
                'e_mail'  => "info@tworczestudio.pl",
                'website' => "www.tworczestudio.pl",
                'industry_id'  => "9"
            ],
            [
                'user_id' => '1',
                'name'  => "Przedsiębiorczy Doradcy",
                'description'  => "Przedsiębiorczy Doradcy to zespół doświadczonych specjalistów, którzy pomagają przedsiębiorcom w osiąganiu sukcesu. Nasze usługi obejmują doradztwo biznesowe, planowanie strategii rozwoju i optymalizację procesów. Dzięki naszemu wsparciu możesz skutecznie zarządzać swoim biznesem i realizować ambitne cele.",
                'regon'  => "5432109876543",
                'nip'  => "123456789",
                'phone_number'  => "34567890",
                'e_mail'  => "kontakt@doradcy.biz",
                'website' => "www.doradcy.biz",
                'industry_id'  => "5"
            ],
            [
                'user_id' => '2',
                'name'  => "Smakowite Przysmaki",
                'description'  => "Smakowite Przysmaki to sklep z wysokiej jakości produktami spożywczymi. Oferujemy szeroki wybór świeżych owoców, warzyw, mięsa, wędlin, nabiału i innych smakowitych przysmaków. Nasze produkty są starannie wyselekcjonowane, aby zapewnić naszym klientom najlepszą jakość i autentyczny smak.",
                'regon'  => "9012345678901",
                'nip'  => "987654321",
                'phone_number'  => "23456789",
                'e_mail'  => "info@smakowiteprzysmaki.pl",
                'website' => "www.smakowiteprzysmaki.pl",
                'industry_id'  => "18"
            ],
            [
                'user_id' => '3',
                'name'  => "Energetyczne Rozwiązania",
                'description'  => "Energetyczne Rozwiązania to lider w dziedzinie energii odnawialnej. Specjalizujemy się w projektowaniu i instalacji systemów solarnych, wiatrowych i geotermalnych. Nasze rozwiązania pozwalają naszym klientom zmniejszyć koszty energii, zwiększyć efektywność i przyczynić się do ochrony środowiska.",
                'regon'  => "1098765432109",
                'nip'  => "123456789",
                'phone_number'  => "45678901",
                'e_mail'  => "kontakt@energetycznerez.pl",
                'website' => "www.energetycznerez.pl",
                'industry_id'  => "11"
            ],
            [
                'user_id' => '4',
                'name'  => "Luksusowe Podróże",
                'description'  => "Luksusowe Podróże to agencja turystyczna specjalizująca się w organizacji wyjątkowych podróży dla najbardziej wymagających klientów. Oferujemy luksusowe wycieczki, ekskluzywne hotele, indywidualne programy zwiedzania i niezapomniane doświadczenia. Daj się ponieść luksusowi i odkryj świat z nami.",
                'regon'  => "7654321098765",
                'nip'  => "987654321",
                'phone_number'  => "56789012",
                'e_mail'  => "info@luksusowepodroze.pl",
                'website' => "www.luksusowepodroze.pl",
                'industry_id'  => "20"
            ],
            [
                'user_id' => '1',
                'name'  => "Kreatywne Malarstwo",
                'description'  => "Kreatywne Malarstwo to studio artystyczne, które tworzy unikalne dzieła sztuki. Nasze prace są wyrazem pasji, kreatywności i indywidualnego podejścia do sztuki. Oferujemy obrazy olejne, akwarele, rysunki i inne dzieła sztuki, które ożywią Twoje wnętrza i nadadzą im wyjątkowego charakteru.",
                'regon'  => "5432109876543",
                'nip'  => "123456789",
                'phone_number'  => "34567890",
                'e_mail'  => "kontakt@kreatywnemalarstwo.pl",
                'website' => "www.kreatywnemalarstwo.pl",
                'industry_id'  => "15"
            ],
            [
                'user_id' => '2',
                'name'  => "Zdrowy Styl Życia",
                'description'  => "Zdrowy Styl Życia to sklep z naturalnymi produktami dla zdrowia i dobrej kondycji. Oferujemy szeroki wybór suplementów diety, organicznych produktów spożywczych, kosmetyków naturalnych i innych produktów wspierających zdrowy tryb życia. Dbamy o Twoje dobre samopoczucie i naturalne piękno.",
                'regon'  => "9012345678901",
                'nip'  => "987654321",
                'phone_number'  => "23456789",
                'e_mail'  => "info@zdrowystylzycia.pl",
                'website' => "www.zdrowystylzycia.pl",
                'industry_id'  => "25"
            ]
        ];
        

        Company::insert($companies);
    }
}
