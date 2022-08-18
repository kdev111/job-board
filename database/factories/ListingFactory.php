<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->realText(200),
            'company' => \App\Models\Company::get()->random()->id,
            'location' => \App\Models\Location::get()->random()->id,
            'remote_allowed' => $this->faker->boolean(50),
            'hybrid_allowed' => $this->faker->boolean(50),
            'inperson_allowed' => $this->faker->boolean(50),
            'salary_min' => $this->faker->numberBetween(5000, 10000),
            'salary_max' => $this->faker->numberBetween(10000, 20000),
            'currency_code' => $this->faker->currencyCode()
        ];
    }
}
