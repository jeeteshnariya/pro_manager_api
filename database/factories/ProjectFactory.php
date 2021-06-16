<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'technology' => "Laravel",
            'startdate' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'enddate' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'status' => "active",
            'desc' => $this->faker->sentence($nbWords = 6, $variableNbWords = true)
        ];
    }
}
