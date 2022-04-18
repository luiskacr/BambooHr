<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Deparment;
use App\Models\Employee;
use App\Models\Person;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'person_id' => Person::factory(),
            'hireDate' => $this->faker->date(),
            'deparment_id' => Deparment::factory(),
            'activeState' => $this->faker->boolean,
            'workFor' => $this->faker->word,
            'fireDate' => $this->faker->date(),
        ];
    }
}
