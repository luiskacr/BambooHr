<?php

namespace Database\Seeders;

use App\Models\PersonProfile;
use Illuminate\Database\Seeder;

class PersonProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PersonProfile::factory()->count(5)->create();
    }
}
