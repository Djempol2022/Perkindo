<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $no = 1;
        return [
            'judul' => 'Ini contoh',
            'isi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur laboriosam fugiat molestias enim ut qui nam quas aliquid iure! Repudiandae fugiat minima incidunt culpa sint rem, nisi nulla optio distinctio nostrum dicta eligendi consectetur? Sed sit assumenda similique nesciunt repellendus! Natus, ipsum repellendus. Totam deleniti cum, dolorem repellendus similique eligendi.',
            'foto' => '/img/hero_image.png',
            'slug' => 'ini-contoh-' . $no++
        ];
    }
}
