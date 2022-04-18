<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Knowledge;
use App\Models\PersonProfile;

class KnowledgeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Knowledge::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'personProfile_id' => PersonProfile::factory(),
            'title' => $this->faker->sentence(4),
            'where' => $this->faker->word,
            'endDate' => $this->faker->date(),
            'typeTecnilogy' => $this->faker->word,
        ];
    }
}
