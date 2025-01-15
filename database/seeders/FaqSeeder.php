<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    public function run()
    {
        Faq::create([
            'category' => 'Algemeen',
            'question' => 'Wat is Laravel?',
            'answer' => 'Laravel is een PHP-framework voor webontwikkeling.',
        ]);

        Faq::create([
            'category' => 'Technisch',
            'question' => 'Hoe installeer ik Laravel?',
            'answer' => 'Gebruik Composer: composer create-project laravel/laravel projectnaam.',
        ]);
    }
}
