<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Content>
 */
class ContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->sentence(25, true);
        $url = '/img/1.png';
        $type = 'local_storage';

        return [
            'name' => $name,
            'url' => $url,
            'type' => $type,
        ];
    }
}
