<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $article_name = $this->faker->sentence(6, true);
        $about = $this->faker->sentence(20, true);
        $photo = '/img/1.png';

        return [
            'article_name' => $article_name,
            'about' => $about,
            'photo' => $photo,
        ];
    }
}
