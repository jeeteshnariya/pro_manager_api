<?php

namespace Database\Factories;

use App\Models\File;
use Illuminate\Database\Eloquent\Factories\Factory;

class FileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = File::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => "project.txt",
            'path' => "D/App/Project.txt",
            'status' => "active",
            'size' => $this->faker->numberBetween($min = 5, $max = 20),
            'type' => $this->faker->fileExtension
        ];
    }
}
