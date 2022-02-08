<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WalletFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'main_wallet' => $this->faker->numberBetween($min = 400, $max = 10000),
            'referral_wallet' => $this->faker->numberBetween($min = 400, $max = 10000),
            'bonus_wallet' => $this->faker->numberBetween($min = 400, $max = 10000),
        ];
    }
}
