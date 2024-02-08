<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resident>
 */
class ResidentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nickname = $this->faker->sentence(6, true);
        $fio = $this->faker->name($gender = 'male'|'female');
        $role = $this->faker->sentence(6, true);
        $about = $this->faker->sentence(30, true);
        $photo = '/img/1.png';

        return [
            'nickname' => $nickname,
            'fio' => $fio,
            'role' => $role,
            'about' => $about,
            'photo' => $photo,
        ];
    }
}
