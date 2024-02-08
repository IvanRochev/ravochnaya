<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Merchandise>
 */
class MerchandiseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->sentence(6, true);
        $about = $this->faker->sentence(20, true);
        $price = $this->faker->randomNumber(4, true);

        return [
            'name' => $name,
            'about' => $about,
            'price' => $price,
        ];
    }
}
