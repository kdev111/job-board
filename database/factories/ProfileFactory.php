<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'location' => \App\Models\Location::get()->random()->id,
            'description' => $this->faker->text(200),
            'photo_url' => $this->faker->imageUrl(200, 200),
            'linkedin_url' => $this->faker->url(),
            'whatsapp' => $this->faker->phoneNumber()
        ];
    }
}
