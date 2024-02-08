<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MerchandisePhoto>
 */
class MerchandisePhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $position = $this->faker->randomNumber(1, true);
        $url = '/img/1.png';
        $name = $this->faker->sentence(6, true);

        return [
            'position' => $position,
            'url' => $url,
            'name' => $name,
        ];
    }
}
