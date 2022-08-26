<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Compagnies>
 */
class CompagniesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'compagnyName' => $this->faker->company,
            'compagnyAddress' => $this->faker->streetAddress,
            'PostalCode' => $this->faker->postcode,
            'DoorNumber' => $this->faker->buildingNumber,
            'phoneNumber' => $this->faker->phoneNumber,
            'email' => $this->faker->safeEmail,
            'contactName' => $this->faker->lastName,
            'contactFirstName' => $this->faker->firstNameMale,
            'image' => $this->faker->imageUrl($width = 50, $height = 50),
        ];
    }
}
