<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    public function run()
    {
        // Crée 10 articles de news avec la factory
        News::factory(10)->create();
    }
}
