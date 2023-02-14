<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class PhoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $rand = ['Work', 'Home', 'Landline', 'Mobile'];
        return [
            'phone' => $this->faker->phoneNumber,
            'label' => $rand[array_rand($rand)],
        ];
    }
}
