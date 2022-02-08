<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserdataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigitNotNull(),
            'name' => $this->faker->word(5),
            'address' => $this->faker->sentence(15),
            'state' => $this->faker->word(7),
            'date_of_birth' => now(),
        ];
    }
}
