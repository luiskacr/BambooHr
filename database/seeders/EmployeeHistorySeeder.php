<?php

namespace Database\Seeders;

use App\Models\EmployeeHistory;
use Illuminate\Database\Seeder;

class EmployeeHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmployeeHistory::factory()->count(5)->create();
    }
}
