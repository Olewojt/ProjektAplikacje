<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Http\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::insert(
            [
                'name'  => "Hertz",
                'description'  => "Nunc nec lorem aliquet, pretium est vitae, interdum justo. Sed eget ultricies nisi, non cursus mauris. Aenean gravida tortor a leo congue, quis euismod ex viverra. Phasellus pharetra luctus scelerisque.",
                'regon'  => "0077622308075",
                'nip'  => "505882319",
                'phone_number'  => "24266297",
                'e_mail'  => "Hertz@hertz.com",
                'industry_id'  => "0",
            ],
            [
                'name'  => "Walmart",
                'description'  => "Maecenas ac ante sit amet arcu dictum vulputate. Integer blandit euismod diam. Sed fringilla erat ac risus accumsan pharetra. Proin vitae rhoncus nulla. Vivamus hendrerit finibus ex, commodo tincidunt neque.",
                'regon'  => "5676429756728",
                'nip'  => "688783153",
                'phone_number'  => "27005994",
                'e_mail'  => "Walmart@walmart.com",
                'industry_id'  => "0",
            ],
            [
                'name'  => "Springer",
                'description'  => "Maecenas placerat massa ornare ligula fringilla volutpat. Proin eu sapien mi. Suspendisse eu ante ex. Suspendisse id nulla at leo finibus ultricies in eget turpis. Nulla consectetur tincidunt justo ac.",
                'regon'  => "0998749179866",
                'nip'  => "045144448",
                'phone_number'  => "47603358",
                'e_mail'  => "Springer@springer.com",
                'industry_id'  => "0",
            ],
            [
                'name'  => "Januszex",
                'description'  => "Curabitur porttitor ornare tempus. Aliquam accumsan blandit purus at vulputate. Nunc tristique tempor felis, eget porttitor dui egestas sit amet. Sed interdum pretium mi, nec luctus urna bibendum a. Sed.",
                'regon'  => "7391718906859",
                'nip'  => "499321083",
                'phone_number'  => "80807420",
                'e_mail'  => "Januszex@januszex.com",
                'industry_id'  => "0",
            ],
            [
                'name'  => "Termopol",
                'description'  => "Donec egestas, nibh id aliquet pellentesque, tortor nisl venenatis nulla, nec eleifend eros leo sit amet metus. Nunc eu dictum ante. Sed ut pretium ante. In eu faucibus mauris, malesuada.",
                'regon'  => "2699194998223",
                'nip'  => "865149970",
                'phone_number'  => "73338857",
                'e_mail'  => "Termopol@termopol.com",
                'industry_id'  => "0",
            ]

        );
    }
}
