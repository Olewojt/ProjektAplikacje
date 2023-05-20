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
                'company_id' => '3',
                'title' => 'Super firma',
                'description' => 'Nie no super firma nie moge sie nacieszyc ta firma',
                'rating' => '5'
            ],
            [
                'user_id' => '2',
                'company_id' => '1',
                'title' => 'Fajnie',
                'description' => 'Super firma, kurde mol kurde uwielbiam ich sa super ja nie moge ale no tylko 3 gwiazdki bo jestem polaczkiem',
                'rating' => '3'
            ],
            [
                'user_id' => '3',
                'company_id' => '5',
                'title' => 'Tragedia',
                'description' => 'Tragiczna firma, to jest niepojęte jak można być takim tragicznym przedsiębiorcą i normlanie nie wiem kurde mol już.',
                'rating' => '1'
            ],
        ]);
    }
}
