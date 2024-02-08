<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ResidentLink>
 */
class ResidentLinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $social = $this->faker->numberBetween(1,5);    
        $link = 'https://www.youtube.com/watch?v=dQw4w9WgXcQ';

        return [
            'social' => $social,
            'link' => $link,
        ];
    }
}
