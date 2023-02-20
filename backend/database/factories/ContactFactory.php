<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $firstname = $this->faker->firstName($gender = 'male'|'female');
        $lastname = $this->faker->lastName;
        return [
            'full_name' => $firstname.' '.$lastname,
            'email' => $this->faker->safeEmail,      
            'profile_photo' => $this->faker->numberBetween(1, 9999),
        ];
    }
}