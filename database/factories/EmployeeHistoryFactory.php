<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Deparment;
use App\Models\Employee;
use App\Models\EmployeeHistory;

class EmployeeHistoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmployeeHistory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employee_id' => Employee::factory(),
            'efectiveDate' => $this->faker->date(),
            'salary' => $this->faker->randomFloat(2, 0, 999999.99),
            'deparment_id' => Deparment::factory(),
        ];
    }
}
