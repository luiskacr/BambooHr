<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Person;

class PersonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Person::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cardId' => $this->faker->word,
            'name' => $this->faker->name,
            'lastname' => $this->faker->lastName,
            'contact' => $this->faker->word,
            'email' => $this->faker->safeEmail,
            'birthDate' => $this->faker->date(),
            'gender' => $this->faker->word,
            'address' => $this->faker->word,
        ];
    }
}
