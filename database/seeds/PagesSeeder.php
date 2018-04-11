<?php

use Faker\Factory;
use App\Model\Page;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{

    public function run()
    {
        Page::truncate();
        $keys = [
            'home', 'services', 'portfolio', 'blog', 'about_us'
        ];
        $names = [
            'Главная', 'Услуги', 'Портфолио', 'Блог', 'О компании'
        ];
        foreach ($keys as $i => $key) {
            factory(Page::class)->create(['key' => $key, 'name' => $names[$i]]);
        }
    }

}
