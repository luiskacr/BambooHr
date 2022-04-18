<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Experience;
use App\Models\PersonProfile;

class ExperienceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Experience::class;

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
            'description' => $this->faker->text,
            'startDate' => $this->faker->date(),
            'finishDate' => $this->faker->date(),
        ];
    }
}
