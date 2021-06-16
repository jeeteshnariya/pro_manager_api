<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'dob' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'country' => $this->faker->country,
            //'gender' => $this->faker->
            'phonenumber' => $this->faker->numberBetween($min = 7777777777, $max = 9999999999),
            'semester' => $this->faker->numberBetween($min = 1, $max = 6),
            'clgname' => $this->faker->company,
            'course' => "B.C.A",
            'role' => 1,
            'pid' => 1,
            //'Qualification' => $this->faker->
            //'Technology' => $this->faker->
            'cover' => $this->faker->image(),
            'avtar' => $this->faker->emoji,
            //'status' => $this->faker->
            'email' => $this->faker->safeEmail()
        ];
    }
}
