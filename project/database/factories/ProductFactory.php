<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
        $pastry_name = ['Carne', 'Frango', 'Calabresa', 'Queijo'];
        $pastry_complement = ['Catupiry', 'Cheddar', 'Mussarela', 'Azeitona', ''];
        $photo_number = rand(0,1);
        return [
            'id' => fake()->uuid(),
            'name' => $pastry_name[rand(0,3)] . " " . $pastry_complement[rand(0,4)],
            'price' => fake()->randomFloat($nbMaxDecimals = 2, $min = 8, $max = 14),
            'photo' => "pastel{$photo_number}.jpg",
        ];
    }
}

