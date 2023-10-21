<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->uuid(),
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => substr(fake()->e164PhoneNumber(), 1),
            'birthday' => fake()->date($format = 'Y-m-d', $max = '2005-06-06'),
            'address' => fake()->streetName(),
            'complement' => fake()->buildingNumber(),
            'neighborhood' => fake()->citySuffix(),
            'zipcode' => "03195-" . fake()->numberBetween($min = 100, $max = 999),
        ];
    }
}
