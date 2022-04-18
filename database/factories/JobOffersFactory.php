<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\JobOffers;

class JobOffersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JobOffers::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'jobDescriptions' => $this->faker->text,
            'jobRequirements' => $this->faker->text,
            'startDate' => $this->faker->date(),
            'finishDate' => $this->faker->date(),
        ];
    }
}
