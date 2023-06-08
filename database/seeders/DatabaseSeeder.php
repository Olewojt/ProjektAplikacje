<?php

namespace Database\Seeders;

use App\Models\Company;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            IndustrySeeder::class,
            UserSeeder::class,
            CompanySeeder::class,
            VoivodeshipSeeder::class,
            CompanyAddressSeeder::class,
            ReviewSeeder::class,
            PendingSeeder::class,
        ]);

        $companies = Company::all();
        foreach ($companies as $company){
            if ( count($company->reviews) != 0 ){
                $rating = $company->reviews()->avg('rating');
                $company->average_rating = $rating;
                $company->saveQuietly();
            }
        }
    }
}
