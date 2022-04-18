<?php

namespace Database\Seeders;

use App\Models\JobOffers;
use Illuminate\Database\Seeder;

class JobOffersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobOffers::factory()->count(5)->create();
    }
}
