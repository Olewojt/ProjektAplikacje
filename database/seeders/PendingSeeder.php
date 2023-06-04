<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pending;

class PendingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pending::insert([
            [
                'user_id' => 3,
                'accepted' => 0
            ],
            [
                'user_id' => 4,
                'accepted' => 0
            ],
        ]);
    }
}
