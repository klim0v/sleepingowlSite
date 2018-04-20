<?php

use Faker\Factory;
use App\Model\Page;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{

    public function run()
    {
        Page::truncate();
        $names = [
            'home' => 'Главная',
            'services' => 'Услуги',
            'portfolio' => 'Портфолио',
//            'blog' => 'Блог',
            'about_us' => 'О компании'
        ];
        foreach ($names as $key => $name) {
            factory(Page::class)->create(['key' => $key, 'name' => $name]);
        }
    }

}
