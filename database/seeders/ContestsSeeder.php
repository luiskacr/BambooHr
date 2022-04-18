<?php

namespace Database\Seeders;

use App\Models\Contests;
use Illuminate\Database\Seeder;

class ContestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contests::factory()->count(5)->create();
    }
}
