<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user' => \App\Models\User::get()->random()->id,
            'name' => $this->faker->company(),
            'logo' => $this->faker->imageUrl(200, 100),
            'website' => $this->faker->url(),
            'credits' => $this->faker->randomNumber(2)
        ];
    }
}
