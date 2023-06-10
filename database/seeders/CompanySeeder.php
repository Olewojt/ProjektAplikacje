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
                'user_id' => '3',
                'name'  => "Innowacyjne Rozwiązania",
                'description'  => "Innowacyjne Rozwiązania to czołowy dostawca nowatorskich rozwiązań dla różnych branż. Nasza firma specjalizuje się w opracowywaniu i wdrażaniu zaawansowanych technologii, które zrewolucjonizują sposób prowadzenia biznesu. Nasi eksperci są dedykowani dostarczaniu wyjątkowych rezultatów i przekraczaniu oczekiwań klientów.",
                'regon'  => "0077622308075",
                'nip'  => "505882319",
                'phone_number'  => "24266297",
                'e_mail'  => "info@innowacyjnerez.pl",
                'website' => "www.innowacyjnerez.pl",
                'industry_id'  => "6",
                'logo' => "logos/logo1.svg"
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
                'industry_id'  => "28",
                'logo' => "logos/logo2.svg"
            ],
            [
                'user_id' => '1',
                'name'  => "Elegancka Moda",
                'description'  => "Elegancka Moda to ekskluzywny sklep z odzieżą i dodatkami dla wymagających klientów. Oferujemy szeroki wybór markowych produktów, które podkreślą Twój indywidualny styl. Nasza pasja do mody pozwala nam dostarczać produkty najwyższej jakości, które spełniają oczekiwania nawet najbardziej wymagających klientów.",
                'regon'  => "9876543210987",
                'nip'  => "123456789",
                'phone_number'  => "87654321",
                'e_mail'  => "kontakt@eleganckamoda.pl",
                'website' => "www.eleganckamoda.pl",
                'industry_id'  => "23",
                'logo' => "logos/logo3.svg"
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
                'industry_id'  => "21",
                'logo' => "logos/logo4.svg"
            ],
            [
                'user_id' => '10',
                'name'  => "Przedsiębiorczy Doradcy",
                'description'  => "Przedsiębiorczy Doradcy to zespół doświadczonych specjalistów, którzy pomagają przedsiębiorcom w osiąganiu sukcesu. Nasze usługi obejmują doradztwo biznesowe, planowanie strategii rozwoju i optymalizację procesów. Dzięki naszemu wsparciu możesz skutecznie zarządzać swoim biznesem i realizować ambitne cele.",
                'regon'  => "5432109876543",
                'nip'  => "123456789",
                'phone_number'  => "34567890",
                'e_mail'  => "kontakt@doradcy.biz",
                'website' => "www.doradcy.biz",
                'industry_id'  => "6",
                'logo' => "logos/logo5.svg"
            ],
            [
                'user_id' => '10',
                'name'  => "Smakowite Przysmaki",
                'description'  => "Smakowite Przysmaki to sklep z wysokiej jakości produktami spożywczymi. Oferujemy szeroki wybór świeżych owoców, warzyw, mięsa, wędlin, nabiału i innych smakowitych przysmaków. Nasze produkty są starannie wyselekcjonowane, aby zapewnić naszym klientom najlepszą jakość i autentyczny smak.",
                'regon'  => "9012345678901",
                'nip'  => "987654321",
                'phone_number'  => "23456789",
                'e_mail'  => "info@smakowiteprzysmaki.pl",
                'website' => "www.smakowiteprzysmaki.pl",
                'industry_id'  => "27",
                'logo' => "logos/logo6.svg"
            ],
            [
                'user_id' => '12',
                'name'  => "Energetyczne Rozwiązania",
                'description'  => "Energetyczne Rozwiązania to lider w dziedzinie energii odnawialnej. Specjalizujemy się w projektowaniu i instalacji systemów solarnych, wiatrowych i geotermalnych. Nasze rozwiązania pozwalają naszym klientom zmniejszyć koszty energii, zwiększyć efektywność i przyczynić się do ochrony środowiska.",
                'regon'  => "1098765432109",
                'nip'  => "123456789",
                'phone_number'  => "45678901",
                'e_mail'  => "kontakt@energetycznerez.pl",
                'website' => "www.energetycznerez.pl",
                'industry_id'  => "7",
                'logo' => "logos/logo7.svg"
            ],
            [
                'user_id' => '8',
                'name'  => "Luksusowe Podróże",
                'description'  => "Luksusowe Podróże to agencja turystyczna specjalizująca się w organizacji wyjątkowych podróży dla najbardziej wymagających klientów. Oferujemy luksusowe wycieczki, ekskluzywne hotele, indywidualne programy zwiedzania i niezapomniane doświadczenia. Daj się ponieść luksusowi i odkryj świat z nami.",
                'regon'  => "7654321098765",
                'nip'  => "987654321",
                'phone_number'  => "56789012",
                'e_mail'  => "info@luksusowepodroze.pl",
                'website' => "www.luksusowepodroze.pl",
                'industry_id'  => "12",
                'logo' => "logos/logo8.svg"
            ],
            [
                'user_id' => '5',
                'name'  => "Kreatywne Malarstwo",
                'description'  => "Kreatywne Malarstwo to studio artystyczne, które tworzy unikalne dzieła sztuki. Nasze prace są wyrazem pasji, kreatywności i indywidualnego podejścia do sztuki. Oferujemy obrazy olejne, akwarele, rysunki i inne dzieła sztuki, które ożywią Twoje wnętrza i nadadzą im wyjątkowego charakteru.",
                'regon'  => "5432109876543",
                'nip'  => "123456789",
                'phone_number'  => "34567890",
                'e_mail'  => "kontakt@kreatywnemalarstwo.pl",
                'website' => "www.kreatywnemalarstwo.pl",
                'industry_id'  => "23",
                'logo' => "logos/logo9.svg"
            ],
            [
                'user_id' => '4',
                'name'  => "Zdrowy Styl Życia",
                'description'  => "Zdrowy Styl Życia to sklep z naturalnymi produktami dla zdrowia i dobrej kondycji. Oferujemy szeroki wybór suplementów diety, organicznych produktów spożywczych, kosmetyków naturalnych i innych produktów wspierających zdrowy tryb życia. Dbamy o Twoje dobre samopoczucie i naturalne piękno.",
                'regon'  => "9012345678901",
                'nip'  => "987654321",
                'phone_number'  => "23456789",
                'e_mail'  => "info@zdrowystylzycia.pl",
                'website' => "www.zdrowystylzycia.pl",
                'industry_id'  => "27",
                'logo' => "logos/logo10.svg"
            ],
            [
                'user_id' => '4',
                'name' => 'Kreatywna Fabryka',
                'description' => 'Kreatywna Fabryka to firma zajmująca się tworzeniem innowacyjnych rozwiązań dla różnych branż. Nasze produkty i usługi są dedykowane klientom, którzy pragną wyjść poza utarte schematy i osiągnąć nowe poziomy sukcesu.',
                'regon' => '5034074307162',
                'nip' => '5421103867',
                'phone_number' => '462875914',
                'e_mail' => 'kontakt@kreatywnafabryka.pl',
                'website' => 'www.kreatywnafabryka.pl',
                'industry_id' => '23',
                'logo' => "logos/logo12.svg"
            ],
            [
                'user_id' => '5',
                'name' => 'Tech-Innowacje',
                'description' => 'Tech-Innowacje to dynamicznie rozwijające się przedsiębiorstwo, specjalizujące się w opracowywaniu i wdrażaniu zaawansowanych technologii. Nasza misja polega na dostarczaniu innowacyjnych rozwiązań, które umożliwiają naszym klientom osiągnięcie przewagi konkurencyjnej.',
                'regon' => '1897058710001',
                'nip' => '7496135022',
                'phone_number' => '593247619',
                'e_mail' => 'kontakt@tech-innowacje.pl',
                'website' => 'www.tech-innowacje.pl',
                'industry_id' => '28',
                'logo' => "logos/logo13.svg"
            ],
            [
                'user_id' => '8',
                'name' => 'Inventorium',
                'description' => 'Inventorium to firma skupiająca się na innowacjach i opracowywaniu nowatorskich rozwiązań dla różnych sektorów gospodarki. Nasza pasja do odkrywania, projektowania i realizacji pomysłów pozwala nam dostarczać klientom produkty i usługi o wysokim poziomie jakości i wartości.',
                'regon' => '9402172511873',
                'nip' => '2675407107',
                'phone_number' => '685923481',
                'e_mail' => 'kontakt@inventorium.pl',
                'website' => 'www.inventorium.pl',
                'industry_id' => '26',
                'logo' => "logos/logo14.svg"
            ],
            [
                'user_id' => '10',
                'name' => 'Ekosfera',
                'description' => 'Ekosfera to firma specjalizująca się w dostarczaniu ekologicznych rozwiązań dla różnych sektorów gospodarki. Nasze innowacyjne produkty i usługi pozwalają naszym klientom osiągnąć cele zrównoważonego rozwoju, minimalizując negatywny wpływ na środowisko naturalne.',
                'regon' => '8736018203376',
                'nip' => '1294875390',
                'phone_number' => '754912607',
                'e_mail' => 'kontakt@ekosfera.pl',
                'website' => 'www.ekosfera.pl',
                'industry_id' => '7',
                'logo' => "logos/logo15.svg"
            ],
            [
                'user_id' => '12',
                'name' => 'Dynamiczne Rozwiązania',
                'description' => 'Dynamiczne Rozwiązania to firma, która dostarcza innowacyjne rozwiązania biznesowe dla klientów z różnych sektorów. Nasz zespół ekspertów skupia się na tworzeniu optymalnych strategii, które wspierają rozwój i wzrost przedsiębiorstw w dynamicznym środowisku rynkowym.',
                'regon' => '6689247199922',
                'nip' => '4215807366',
                'phone_number' => '852301647',
                'e_mail' => 'kontakt@dynamicznerozwiazania.pl',
                'website' => 'www.dynamicznerozwiazania.pl',
                'industry_id' => '7',
                'logo' => "logos/logo16.svg"
            ],
            [
                'user_id' => '1',
                'name' => 'Innowacyjne Sp. z o.o.',
                'description' => 'Innowacyjne Sp. z o.o. jest wiodącym dostawcą nowatorskich rozwiązań technologicznych dla różnych branż. Nasza firma angażuje się w rozwój i wdrażanie zaawansowanych rozwiązań, które pomagają klientom odnieść sukces na konkurencyjnym rynku.',
                'regon' => '0846323172870',
                'nip' => '6751032983',
                'phone_number' => '374981625',
                'e_mail' => 'kontakt@innowacyjne.com',
                'website' => 'www.innowacyjne.com',
                'industry_id' => '15',
                'logo' => "logos/logo17.svg"
            ],
            [
                'user_id' => '2',
                'name' => 'Progresywny Dizajn',
                'description' => 'Progresywny Dizajn to agencja projektowa, która oferuje nowoczesne i innowacyjne rozwiązania w zakresie projektowania graficznego i wizualnego. Nasze projekty są kreatywne, funkcjonalne i odzwierciedlają unikalną tożsamość naszych klientów.',
                'regon' => '3761920831917',
                'nip' => '8210374096',
                'phone_number' => '596738401',
                'e_mail' => 'kontakt@progresywnydizajn.pl',
                'website' => 'www.progresywnydizajn.pl',
                'industry_id' => '21',
                'logo' => "logos/logo18.svg"
            ],
            [
                'user_id' => '3',
                'name' => 'Innowacyjne Rozwiązania IT',
                'description' => 'Innowacyjne Rozwiązania IT to czołowy dostawca nowatorskich technologii informatycznych dla różnych branż. Nasza firma specjalizuje się w opracowywaniu i wdrażaniu zaawansowanych rozwiązań, które przyczyniają się do sukcesu i wzrostu naszych klientów.',
                'regon' => '2458092751661',
                'nip' => '9935467285',
                'phone_number' => '710352849',
                'e_mail' => 'kontakt@innowacyjneit.pl',
                'website' => 'www.innowacyjneit.pl',
                'industry_id' => '28',
                'logo' => "logos/logo19.svg"
            ],
        ];
        

        Company::insert($companies);
    }
}
