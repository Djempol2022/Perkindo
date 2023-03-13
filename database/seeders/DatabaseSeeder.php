<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Berita;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Berita::factory(10)->create();
        Berita::factory()->create([
            'judul' => 'Ini contoh',
            'isi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur laboriosam fugiat molestias enim ut qui nam quas aliquid iure! Repudiandae fugiat minima incidunt culpa sint rem, nisi nulla optio distinctio nostrum dicta eligendi consectetur? Sed sit assumenda similique nesciunt repellendus! Natus, ipsum repellendus. Totam deleniti cum, dolorem repellendus similique eligendi.',
            'foto' => '/img/hero_image.png',
            'slug' => 'ini-contoh'
        ]);
    }
}
